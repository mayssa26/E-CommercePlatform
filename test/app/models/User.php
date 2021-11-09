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
       
        
        public function inscrit($data) {
            $this->db->query('INSERT INTO users (last_name,first_name,pseudo,email,addresse,sexe,telephone,mdp) 
            VALUES(:last_name,:first_name,:pseudo,:email,:addresse,:sexe,:telephone,:mdp)');
    
            //Bind values
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':first_name', $data['first_name']);
            $this->db->bind(':pseudo', $data['pseudo']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':addresse', $data['addresse']);
            $this->db->bind(':sexe', $data['sexe']);
            $this->db->bind(':telephone', $data['telephone']);
            $this->db->bind(':mdp', $data['password']);

    
            
            
  
    
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }


        public function login($pseudo, $mdp) {
            $this->db->query('SELECT * FROM users WHERE pseudo = :pseudo');
    
            //Bind value
            $this->db->bind(':pseudo', $pseudo);
            
    
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
    public function getuser($id){
        $this->db->query('SELECT * FROM users WHERE id=:id_user ');
       

        //Bind values
        $this->db->bind(':id_user', $id);
       
         //Execute function
         
            return ($this->db->single());
       
        
    }
}
?>
