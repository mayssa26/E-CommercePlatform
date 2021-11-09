<?php
    class get{
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getuser(){
            $this->db->query('SELECT * FROM admins ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
        public function getall(){
            $this->db->query('SELECT * FROM products ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
        public function getcat(){
            $this->db->query('SELECT name FROM category ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);
           


        }
        public function getbrand(){
            $this->db->query('SELECT brand_name FROM brands ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            
            return($pc);
           


        }
        public function getreviews(){
            $this->db->query('SELECT * FROM reviews ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            
            return($pc);
           


        }
        public function addprod($data) {
            var_dump($data);
           
            $this->db->query('INSERT INTO products (item_brand,item_name,item_price,item_qte,item_image,item_details,id_cat,item_discount) 
            VALUES(:item_brand,:item_name,:item_price,:item_qte,:item_image,:item_details,:id_cat,:item_discount)');
    
            //Bind values
            $this->db->bind(':item_brand', $data['item_brand']);
            $this->db->bind(':item_name', $data['item_name']);
            $this->db->bind(':item_price', $data['item_price']);
            $this->db->bind(':item_qte', $data['item_qte']);
            $this->db->bind(':item_image', $data['item_image']);
            $this->db->bind(':item_details', $data['item_details']);
            $this->db->bind(':id_cat', $data['id_cat']);
            $this->db->bind(':item_discount', $data['item_discount']);
         
           

    
            
            
  
    
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function deleteprod($item_id){
            $this->db->query('DELETE FROM products where item_id = :item_id ');
            //Bind value
            $this->db->bind(':item_id', $item_id);
            
            
            
            return($this->db->execute());


        }
        public function deletereview($id){
            $this->db->query('DELETE FROM reviews where idreview = :id ');
            //Bind value
            $this->db->bind(':id', $id);
            
            
            
            return($this->db->execute());


        }
        public function deletecat($cat_name){
            $this->db->query('DELETE FROM category where name = :cat_name ');
            //Bind value
            $this->db->bind(':cat_name', $cat_name);
            
            
            
            return($this->db->execute());


            
        }
        public function deletebrand($brand_name){
            $this->db->query('DELETE FROM brands where brand_name = :brand_name ');
            //Bind value
            $this->db->bind(':brand_name', $brand_name);
            
            
            
            return($this->db->execute());


            
        }
        public function deleteuser($user_id){
            $this->db->query('DELETE FROM users where id = :user_id ');
            //Bind value
            $this->db->bind(':user_id', $user_id);
            
            
            
            return($this->db->execute());


        }
        public function addcat($data) {
           
           
            $this->db->query('INSERT INTO category (name) 
            VALUES(:cat_name)');
    
            //Bind values
            $this->db->bind(':cat_name', $data['cat_name']);
           
           

    
            
            
  
    
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function addbrand($data) {
           
           
            $this->db->query('INSERT INTO brands (brand_name) 
            VALUES(:brand_name)');
    
            //Bind values
            $this->db->bind(':brand_name', $data['brand_name']);
           
           

    
            
            
  
    
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function getusers(){
            $this->db->query('SELECT * FROM users ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
        public function getorders(){
            $this->db->query('SELECT * FROM orders ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }

       
       
    }
