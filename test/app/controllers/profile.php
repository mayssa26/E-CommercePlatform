<?php
class profile extends Controller {
    public function __construct() {
        
            $this->profileModel = $this->model('Mprofile');
        
    }
    public function updateimg(){
        $data = [
            
            'pass' => '',
            'newpass' => '',
           
            'newpass2' => '',
            'passError' => '',
            
            'newpassError' => '',
            'newpass2Error' => ''
           
        ];
    
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            // Process form
            // Sanitize POST data
            
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $image='http://localhost/test/public/img/'.$_FILES['user_img']['name'];

                $id=$_SESSION['user_id'];
                
            
            }
            if ($this->profileModel->updateimg($image,$id)) {
                //Redirect to the login page
                header('location:'.URLROOT.'/pages/profile');
            } else {
                die('Something went wrong.');
            }
        


    }
    public function updatepass(){
        $data = [
            
            'pass' => '',
            'newpass' => '',
           
            'newpass2' => '',
            'passError' => '',
            
            'newpassError' => '',
            'newpass2Error' => ''
           
        ];
    
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            // Process form
            // Sanitize POST data
            
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           
    
                  $data = [
                    'pass' => trim($_POST['pass']),
                    'newpass' => trim($_POST['newpass']),
                   
                    'newpass2' => trim($_POST['newpass2']),
                    
                   
                    'passError' => '',
            
                    'newpassError' => '',
                    'newpass2Error' => ''
                   
                   
                ];
                $id=$_SESSION['user_id'];
                
            
             
                $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

                 // Validate password on length, numeric values,
            if(empty($data['newpass'])){
                $data['newpassError'] = 'Please enter password.';
              } elseif(strlen($data['newpass']) < 6){
                $data['newpassError'] = 'Password must be at least 8 characters';
              } elseif (preg_match($passwordValidation, $data['newpass'])) {
                $data['newpassError'] = 'Password must be have at least one numeric value.';
              }
  
              //Validate confirm password
               if (empty($data['newpass2'])) {
                  $data['newpass2Error'] = 'Please enter password.';
              } else {
                  if ($data['newpass'] != $data['newpass2']) {
                  $data['newpass2Error'] = 'Passwords do not match, please try again.';
                  }
              }
              if($this->profileModel->verifypass($data,$id)){
                
                $data['passError'] = 'Password incorect.';

              }


            

      
            if (empty($data['newpassError'])&& empty($data['newpass2Error'])&&empty($data['passError'])) {
                


                //Register user from model function
                
                if ($this->profileModel->updatepass($data,$id)) {
                    $_SESSION['mdp']=1;
                    //Redirect to the login page
                    header('location:'.URLROOT.'/pages/profile');
                } else {
                    die('Something went wrong.');
                }
             } else{
                   
                    $_SESSION['passError']=$data;
                    header('location:'.URLROOT.'/pages/profile');
                }
            
        }
        


    }

    public function update(){
        $data = [
            
            'last_name' => '',
            'first_name' => '',
           
            'email' => '',
            'addresse' => '',
            
            'telephone' => '',
            'first_nameError' => '',
            'last_nameError' => '',
            'adrError' => '',
            

            'emailError' => '',
           
        ];
    
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            // Process form
            // Sanitize POST data
            
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

           
    
                  $data = [
                    'last_name' => trim($_POST['last_name']),
                    'first_name' => trim($_POST['first_name']),
                   
                    'email' => trim($_POST['email']),
                    'addresse' => trim($_POST['addresse']),
                   
                    'telephone' =>trim($_POST['telephone']),
                    'adrError' => '',
                   
                    'first_nameError' => '',
                    'last_nameError' => '',
                    'emailError' => '',
                   
                ];
                $id=$_SESSION['user_id'];
                
            
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
                if($_SESSION['email']!=$data['email']){
                if ($this->profileModel->findUserByEmail($data['email'])) {
                $data['emailError'] = 'Email is already taken.';
                }}
            }
      
            if (empty($data['first_nameError'])&&empty($data['emailError'])&&empty($data['last_nameError'])) {
                


                //Register user from model function
                
                if ($this->profileModel->update($data,$id)) {
                    
                    //Redirect to the login page
                   
                    header('location:'.URLROOT.'/pages/profile');
                } else {
                    die('Something went wrong.');
                }
            }
            else{
                $data=['adrError' => "",
                   
                'first_nameError' => $data['first_nameError'],
                'last_nameError' => $data['last_nameError'],
                'emailError' => $data['emailError']];

                $_SESSION['profileError']=$data;
                header('location:'.URLROOT.'/pages/profile');
            }
            
            
        }
        


    }

}