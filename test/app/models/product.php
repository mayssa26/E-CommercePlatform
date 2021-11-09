<?php
    class product{
        private $db;

        public function __construct() {
            $this->db = new Database;
        }
        public function getProduct($id){
            $this->db->query('SELECT * FROM products WHERE item_id = :item_id');
            //Bind value
            $this->db->bind(':item_id', $id);
            $row = $this->db->single();
            
            return($row);    

        }
        
        public function getreviews($id){
            $this->db->query('SELECT * FROM reviews WHERE id_item = :item_id');
            //Bind value
            $this->db->bind(':item_id', $id);
            $row = $this->db->resultSet();
            
            return($row);  
            

        }
        public function getallpc(){
            $this->db->query('SELECT * FROM products ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


        }
        public function changerating($rating,$id_item){
          
            
            $this->db->query('UPDATE products SET item_rating=:rating where item_id=:id_item');
            $this->db->bind(':rating', $rating);
            $this->db->bind(':id_item', $id_item);
            
            //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

            }

        
        
       
       
       
        
       
        public function getcat(){
            $this->db->query('SELECT id,name FROM category ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);
           


        }
        public function getbrand(){
            $this->db->query('SELECT brand_id,brand_name FROM brands');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            
            return($pc);
           


        }
        public function addreview($data){
            $this->db->query('INSERT INTO reviews (nom,email,reviw,id_user,id_item,rating,date) 
            VALUES(:nom,:email,:review,:id_user,:id_item,:rating,:date)');
            var_dump($data);
    
            //Bind values
            $this->db->bind(':nom', $data['pseudo']);
            $this->db->bind(':email', $data['email']); 
            $this->db->bind(':review', $data['review']);
            $this->db->bind(':id_user', $data['id']);
            $this->db->bind(':id_item', $data['id_item']);
            $this->db->bind(':rating', $data['rating']);
            $this->db->bind(':date', $data['date']);
            
             //Execute function
             if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
            
        }
        

        


           //---------------------------------------------------------------------------------------------


        public function getprod($action,$brand,$cat,$min,$max,$recherche){
            
            
            if(!empty($action)){

                $sql='SELECT * FROM products where state = 1 and item_price between '.$min.' AND '.$max.' ';
                if(!empty($brand)){
                    $brands = implode("','", $brand);
              
                
                    
                
                    $sql.="and item_brand in('".$brands."')";
                    
                    
                }
                if(!empty($cat)){
                    $cats = implode("','", $cat);
              
                    
                
                    $sql.="and id_cat in('".$cats."')";
                    
                    
                }
                if(!empty($recherche)){

                    $sql.="and item_details like '%".$recherche."%'";
                    

                }
               
            }
           
            $this->db->query($sql);
        
           
    
             
            return ($this->db->resultSet());
            
          
           
        }








          

       
        

        


}