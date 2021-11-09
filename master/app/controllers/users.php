<?php
class users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('user');
    }

    public function register() {
      
        $data = [
            
            'adminname' => '',
           
            'email' => '',
            
            'password' => '',
            'confirmPassword' => '',
            'nameError' => '',
         
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           
    
                  $data = [

                    
                    'adminname' => trim($_POST['adminname']),
                  
                    'email' => trim($_POST['email']),
                
                    'password' => trim($_POST['mdp']),
                    'confirmPassword' =>trim($_POST['mdp2']),
                  
                    'nameError' => '',
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => ''
                ];
                
            
                $pseudoValidation = "/^[a-zA-Z0-9]*$/";
                $nameValidation = "/^[a-zA-Z]*$/";
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";
                 //Validate name on letters
            if (empty($data['adminname'])) {
                $data['nameError'] = 'Please enter name.';
            } elseif (!preg_match($nameValidation, $data['name'])) {
                $data['nameError'] = 'Name can only contain letters .';
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
            if (empty($data['nameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'],PASSWORD_BCRYPT);
                var_dump($data);

                //Register user from model function
                if ($this->userModel->register($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/users/login');
                } else {
                    die('Something went wrong.');
                }
            }
            
        }
        $this->view('register', $data);

    }
    
  

   
    public function login() {
        $data = [
            
            'email' => '',
            'mdp' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         
            $data = [
                'email' => trim($_POST['email']),
                'mdp' => trim($_POST['mdp']),
                'usernameError' => '',
                'passwordError' => '',
                
            ];
           
            //Validate username
            if (empty($data['email'])) {
                $data['usernameError'] = 'Please enter a email.';
            }

            //Validate password
            if (empty($data['mdp'])) {
                $data['passwordError'] = 'Please enter a password.';
            }
        
            
           
        
            

            //Check if all errors are empty
            if (empty($data['usernameError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['mdp']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                    
                } 
                else {
                    $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                    $this->view('login', $data);
                }
            }

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
    public function createUserSession($user) {
      
        
        $_SESSION['user_id'] = $user->id_admin;
        
   
        $_SESSION['name'] = $user->adminname;
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pages/index');
    }
    


    

    public function logout() {
      

        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
       
        header('location:' . URLROOT . '/users/login');
    }
    public function profil(){
        $this->view('profil' );

    }


    
    
}

?>