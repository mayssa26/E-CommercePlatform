<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function inscrit() {
      
        $data = [
            
            'last_name' => '',
            'first_name' => '',
            'pseudo' => '',
            'email' => '',
            'addresse' => '',
            'sexe' => '',
            'telephone' => '',
            'password' => '',
            'confirmPassword' => '',
            'first_nameError' => '',
            'last_nameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
    
                  $data = [
                    'last_name' => trim($_POST['last_name']),
                    'first_name' => trim($_POST['first_name']),
                    'pseudo' => trim($_POST['pseudo']),
                    'email' => trim($_POST['email']),
                    'addresse' => trim($_POST['addresse']),
                    'sexe' => trim($_POST['sexe']),
                    'telephone' =>trim($_POST['telephone']),
                    'password' => trim($_POST['mdp']),
                    'confirmPassword' =>trim($_POST['mdp2']),
                    'first_nameError' => '',
                    'last_nameError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => ''
                ];
            
                $pseudoValidation = "/^[a-zA-Z0-9]*$/";
                $nameValidation = "/^[a-zA-Z]*$/";
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                 //Validate first_name on letters
            if (empty($data['first_name'])) {
                $data['first_nameError'] = 'Please enter first_name.';
            } elseif (!preg_match($nameValidation, $data['first_name'])) {
                $data['first_nameError'] = 'Name can only contain letters .';
            }
              //Validate last_name on letters
              if (empty($data['last_name'])) {
                $data['last_nameError'] = 'Please enter last_name.';
            } elseif (!preg_match($nameValidation, $data['last_name'])) {
                $data['last_nameError'] = 'Name can only contain letters .';
            }
            

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter email address.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Please enter the correct format.';
            } else {
                //Check if email exists.
                if ($this->userModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }
            }
            // Validate password on length, numeric values,
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter password.';
              } elseif(strlen($data['password']) < 6){
                $data['passwordError'] = 'Password must be at least 8 characters';
              } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password must be have at least one numeric value.';
              }
  
              //Validate confirm password
               if (empty($data['confirmPassword'])) {
                  $data['confirmPasswordError'] = 'Please enter password.';
              } else {
                  if ($data['password'] != $data['confirmPassword']) {
                  $data['confirmPasswordError'] = 'Passwords do not match, please try again.';
                  }
              }
               // Make sure that errors are empty
            if (empty($data['first_nameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);

                //Register user from model function
                if ($this->userModel->inscrit($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
            
        }
        $this->view('inscrit', $data);

    }
    
  

   
    public function login() {
        $data = [
            
            'pseudo' => '',
            'mdp' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];
       

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            if(!isset($_POST['msg'])){

            $data = [
                'pseudo' => trim($_POST['pseudo']),
                'mdp' => trim($_POST['mdp']),
                'usernameError' => '',
                'passwordError' => '',
                
            ];
            //Validate username
            if (empty($data['pseudo'])) {
                $data['usernameError'] = 'Please enter a username.';
            }

            //Validate password
            if (empty($data['mdp'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
        }
            else{
                $data = [
                    'pseudo' =>'' ,
                    'mdp' => '',
                    'usernameError' => '',
                    'passwordError' => trim($_POST['msg'])
                ];

            }
           
            
        
        
        
            

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                
                $loggedInUser = $this->userModel->login($data['pseudo'], $data['mdp']);
                
                
                if ($loggedInUser) {
                    $_SESSION['mdp'] = 0;
                    
                    
                    $_SESSION['user_id'] = $loggedInUser->id;
                    $_SESSION['adr'] = $loggedInUser->addresse;
                    $_SESSION['tel'] = $loggedInUser->telephone;
                    $_SESSION['first_name'] = $loggedInUser->first_name;
                    $_SESSION['last_name'] = $loggedInUser->last_name;
                    
        
   
                    $_SESSION['pseudo'] = $loggedInUser->pseudo;
                    $_SESSION['email'] = $loggedInUser->email;
                    header('location:' . URLROOT . '/pages/index');
                } 
                else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('login', $data);
                }
            }

        } elseif(isset($_SESSION['msglog'])){
            $data = [
                'pseudo' =>'' ,
                'mdp' => '',
                'usernameError' => '',
                'passwordError' => $_SESSION['msglog']
            ];
         
            unset($_SESSION['msglog']);

        }
         else {
            $data = [
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('login', $data);
    }
    
    


    

    public function logout() {
        $this->userModel->deleteCart();
        unset($_SESSION['tel']);
        unset($_SESSION['adr']);
        unset($_SESSION['mdp']);
        unset($_SESSION['first_name']);
        unset($_SESSION['last_name']);
        unset($_SESSION['cart']);

        unset($_SESSION['user_id']);
        unset($_SESSION['pseudo']);
        unset($_SESSION['email']);
        unset($_SESSION['array']);
        header('location:' . URLROOT . '/users/login');
    }
    public function profil(){
        $this->view('profil' );

    }


    
    
}

?>