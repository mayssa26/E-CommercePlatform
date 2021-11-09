<?php
    class User {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function deleteCart(){
            $this->db->query('DELETE  FROM cart  ');
            //Bind value
           
            
            
            
            return($this->db->execute());

        }
        
        public function register($data) {
           
            $this->db->query('INSERT INTO admins (adminname,email,mdp) 
            VALUES(:adminname,:email,:mdp)');
    
            //Bind values
            $this->db->bind(':adminname', $data['adminname']);
         
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':mdp', $data['password']);

    
            
            
  
    
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }


        public function login($email, $mdp) {
            $this->db->query('SELECT * FROM admins WHERE email = :email');
    
            //Bind value
            $this->db->bind(':email', $email);
    
            $row = $this->db->single();
           
            
    
            //$hashedmdp = password_hash($mdp, PASSWORD_DEFAULT);
            if(isset($row->mdp)){
            $ow=password_verify($mdp,$row->mdp);
            }
            else{
                $ow=false;
            }
            
            

           
            
    
            if ( $ow) {
                
                return $row;
            } else {
                return false;
            }
        }



//Find user by email. Email is passed in by the Controller.
        public function findUserByEmail($email) {
            //Prepared statement
            $this->db->query('SELECT * FROM users WHERE email = :email');
    
            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);
            $this->db->execute();
          
            //Check if email is already registered
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
      
    
    }
}
?>
