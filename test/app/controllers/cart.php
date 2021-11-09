<?php
class cart extends Controller {
    public function __construct() {
        
            $this->cartModel = $this->model('Mcart');
            $this->productModel = $this->model('Product');
        
    }


    public function deleteCart(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                 $idprod=  trim($_POST['item_id']);
                 unset($_SESSION['cart'][$idprod]);
                 header('location: ' . URLROOT . '/pages/cart');

                
    }else{
        echo ("somthing wrong");
    }
    
}
        
    
    
    
    
   
    public function addCart(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
         
           
      
       
       
       
        if(!isset( $id_user)){
           $data = [
               
               'id_prod' => trim($_POST['item_id']),
               'user_id' => trim($_POST['user_id']),
               'qte' => trim($_POST['qte'])
           ];
           
           
           if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($data['id_prod'], $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$data['id_prod']]+=$data['qte'];//update de session cart
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$data['id_prod']]=$data['qte'];//cration de session cart
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($data['id_prod']=> $data['qte']);
        }
            
           header('Location: '.URLROOT);
    
           
    
    
         }
       }
    }
}