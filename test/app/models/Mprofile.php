<?php
    class Mprofile {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }


        public function update($data,$id) {
            $this->db->query('UPDATE users SET last_name=:last_name,first_name=:first_name,email=:email,addresse=:addresse,telephone=:telephone WHERE id=:id');
    
            //Bind values
            $this->db->bind(':id', $id);
            $this->db->bind(':last_name', $data['last_name']);
            $this->db->bind(':first_name', $data['first_name']);
            
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':addresse', $data['addresse']);

            $this->db->bind(':telephone', $data['telephone']);

            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

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
        public function verifypass($data,$id) {
            $this->db->query('SELECT * FROM users WHERE id = :id');
    
            //Bind value
            $this->db->bind(':id', $id);
            
    
            $row = $this->db->single();
            if(password_verify($data['pass'],$row->mdp)){
            return false ;}
            else{
                return true ;
            }
        }
        

        public function updatepass($data,$id) {
            $this->db->query('SELECT * FROM users WHERE id = :id');
    
            //Bind value
            $this->db->bind(':id', $id);
            
    
            $row = $this->db->single();
            var_dump($row);
            if(password_verify($data['pass'],$row->mdp)){
                // Hash password
            $data['newpass'] = password_hash($data['newpass'],PASSWORD_BCRYPT);
                
            $this->db->query('UPDATE users SET mdp=:mdp where id=:id');
            $this->db->bind(':id', $id);
            $this->db->bind(':mdp', $data['newpass']);
            
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

            }
    
        }


        public function updateimg($image,$id) {
           
                
            $this->db->query('UPDATE users SET img_user=:img where id=:id');
            $this->db->bind(':id', $id);
            $this->db->bind(':img', $image);
            
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

            }
       
    }