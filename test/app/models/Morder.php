<?php
    class Morder {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }



        public function addorder($prod,$qte,$total,$id_user,$datecom){
            $this->db->query('INSERT INTO orders (id_prod,qte,total,id_user,datecom) 
            VALUES(:id_prod,:qte,:total,:id_user,:datecom)');
    
            //Bind values
            $this->db->bind(':id_prod', $prod);
            $this->db->bind(':qte', $qte);
            $this->db->bind(':total', $total);
            $this->db->bind(':id_user', $id_user);
            $this->db->bind(':datecom',$datecom);
           
             //Execute function
             
                //Execute function
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
           
            
        }
        public function getorders(){
            $this->db->query('SELECT * FROM orders ');
            //Bind value
            
            
            $pc = $this->db->resultSet();
            return($pc);


     }

    }