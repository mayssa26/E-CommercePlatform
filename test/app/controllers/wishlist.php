<?php
class wishlist extends Controller {
    public function __construct() {
        
            $this->wishModel = $this->model('Mwishlist');
            $this->cartModel = $this->model('Mcart');
            $this->productModel = $this->model('Product');
        
    }


    public function addwishlist(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if(!isset( $id_user)){
           $data = [
               
               'item_id' => trim($_POST['item_id']),
               'user_id' => trim($_SESSION['user_id']),
               
           ];
           if(!($this->wishModel->checkwhishlist($data['user_id'],$data['item_id']))){
           
           $this->wishModel->addwhishlist($data['item_id'],$data['user_id']); 

           header('Location: '.URLROOT.'/pages/wishlist');
  
         }
         else{
            header('Location: '.URLROOT.'/pages/wishlist');
    
         }
        }
       }
    }

    public function deletefromwish(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            $data = [
                
                'item_id' => trim($_POST['item_id']),
                'user_id' => trim($_SESSION['user_id']),
               
            ];
          
             $this->wishModel->deletwish($data['item_id'],$data['user_id']);


             
            header('Location: '.URLROOT.'/pages/wishlist');
            }

    }

    public function addfromwish(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          
            
       
        
        
        
         
            $data = [
                
                'id_prod' => trim($_POST['item_id']),
                'user_id' => trim($_SESSION['user_id']),
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


             $this->wishModel->deletwish($data['id_prod'],$data['user_id']);


             
            header('Location: '.URLROOT.'/pages/wishlist');
            
         }
        
    }
}