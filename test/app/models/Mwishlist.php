<?php
    class Mwishlist {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }



        public function getelement($id,$id2){
            $this->db->query('SELECT * FROM wishlist WHERE product_id = :item_id AND id_user=:id_user' );
            //Bind value
            $this->db->bind(':item_id', $id);
            $this->db->bind(':id_user', $id2);
            $this->db->execute();
            
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }  
              

        }
        public function addwhishlist($item_id,$id_user){
            $this->db->query('INSERT INTO wishlist(product_id,id_user) 
            VALUES(:product_id,:id_user)');
    
            //Bind values
            $this->db->bind(':product_id', $item_id);
            $this->db->bind(':id_user', $id_user);
         
             //Execute function
             if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }


        public function getalllists($user_id){
            $this->db->query('SELECT * FROM wishlist where id_user = :id_user ');
            //Bind value
            $this->db->bind(':id_user', $user_id);
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }


        public function checkwhishlist($id,$item){
            $this->db->query('SELECT * FROM wishlist where id_user = :id and product_id = :item ');
            $this->db->bind(':id', $id);
            $this->db->bind(':item', $item);
            $this->db->execute();
          
          
            if($this->db->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
      
    
    

         }


         public function deletwish($item_id,$user_id){


            $this->db->query('DELETE FROM wishlist where product_id = :product_id and id_user=:id_user ');
            //Bind value
            $this->db->bind(':product_id', $item_id);
            $this->db->bind(':id_user', $user_id);
            
            
            
            return($this->db->execute());

         }








    }