<?php
class products extends Controller {
    public function __construct() {
        $this->userModel = $this->model('get');
    }
    public function product() {
        $data=$this->userModel->getall();
        $a=$this->userModel->getcat();
        $dump=$this->userModel->getbrand();
        
        
       
        $this->view('products',$data,$a,$dump );
    }
    public function addprod() {
      
        $data = [
            
            'item_brand' => '',
            'item_name' => '',
            'item_price' => '',
            'item_qte' => '',
            'item_image' => '',
            'item_details' => '',
            'item_discount' => '',
           
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $image='http://localhost/mvcframework/public/img/'.$_FILES['item_image']['name'];
           
    
                  $data = [
                    
                     
                    'item_brand' => trim($_POST['item_brand']),
                    'item_name' => trim($_POST['item_name']),
                    'item_price' => trim($_POST['item_price']),
                    'item_qte' => trim($_POST['item_qte']),
                    'id_cat' => trim($_POST['id_cat']),
                    'item_image' => $image,
                    'item_details' => trim($_POST['item_details']),
                    'item_discount' => trim($_POST['item_discount']),
                ];
                
                if ($this->userModel->addprod($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/products/product');
                } else {
                    die('Something went wrong.');
                }
                
               
         
         

              
                //Register user from model function
               // if ($this->userModel->addprod($data)) {
                    //Redirect to the login page
                 //   header('location:'.URLROOT.'/products/product');
             //   } else {
                  //  die('Something went wrong.');
               // }
            
            
        }
        $data=$this->userModel->getall();
        $a=$this->userModel->getcat();
        $this->view('products', $data,$a);

    }
    public function deleteprod(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'item_id' => trim($_POST['item_id']),
                
            ];
            
            $reslt=$this->userModel->deleteprod($data['item_id']);
            
            if($reslt){
                header('Location: '.URLROOT.'/products/product');
                
            }
        }
    
    
    
    
    }
    public function deletereview(){
      $id=$_GET['id'];
           
            
            $reslt=$this->userModel->deletereview($id);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/reviews');
                
            }
        
    
    
    
    
    }
    
}