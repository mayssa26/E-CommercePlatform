<?php
class Pages extends Controller {
    public function __construct() {
        
            $this->userModel = $this->model('get');
        
    }

    public function index() {
        $data=$this->userModel->getuser();
        $a=[ "users" => count($this->userModel->getuser()),
        "reviews" => count($this->userModel->getreviews()),
        "orders" => count($this->userModel->getorders()),
        "products" => count($this->userModel->getall()),
        
        
    ];
    $orders=$this->userModel->getorders();
    for ($x = 1; $x <= 12; $x++) {
        $s=0;
        foreach($orders as $order){
            $date=$order->datecom;
            $month= substr($date,5,2);
            $month2= substr($date,6,1);
            if($x<10){
                if($month2=="".$x){
                    $s+=$order->total;
                }
            }
            else{
                if($month=="".$x){
                    $s+=$order->total;
                }

            }

        }
        $dump[''.$x]=$s;
      }

   
        
       
       
        $this->view('index',$data,$a,$dump);
    }
    
    public function categories() {
        $data=$this->userModel->getcat();
        
       
        $this->view('categories',$data);
    }
    public function brand() {
        $data=$this->userModel->getbrand();
        
       
        $this->view('brands',$data);
    }
    public function deletecat(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'cat_name' => trim($_POST['cat_name']),
                
            ];
            
            $reslt=$this->userModel->deletecat($data['cat_name']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/categories');
                
            }
        }
    
    
    
    
    }
    public function deletebrand(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'brand_name' => trim($_POST['brand']),
                
            ];
            
            $reslt=$this->userModel->deletebrand($data['brand_name']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/brand');
                
            }
        }
    
    
    
    
    }
    public function deleteuser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                
                'id_user' => trim($_POST['user_id']),
                
            ];
            
            $reslt=$this->userModel->deleteuser($data['id_user']);
            
            if($reslt){
                header('Location: '.URLROOT.'/pages/customers');
                
            }
        }
    
    
    
    
    }
    
    public function addcat() {
      
        $data = [
            
            'cat_name' => '',
            
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
          
           
    
                  $data = [
                    
                     
                    'cat_name' => trim($_POST['cat_name']),
                    
                ];
                
                if ($this->userModel->addcat($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/pages/categories');
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
        $data=$this->userModel->getcat();
      
        $this->view('products', $data);

    }
    public function addbrand() {
        
        $data = [
            
            'brand_name' => '',
            
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
          
           
    
                  $data = [
                    
                     
                    'brand_name' => trim($_POST['brand']),
                    
                ];
                
                if ($this->userModel->addbrand($data)) {
                    //Redirect to the login page
                    header('location:'.URLROOT.'/pages/brand');
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
        $data=$this->userModel->getbrand();
      
        
        
       
        $this->view('brands',$data);
    }
    public function customers() {
        $data=$this->userModel->getusers();
        
        
       
        $this->view('customers',$data);
    }

    public function orders() {
        $a=$this->userModel->getusers();
        $data=$this->userModel->getorders();
        $dump=$this->userModel->getall();
        
        
       
        $this->view('orders',$data,$a,$dump);
    }
    
    public function reviews() {
        $a=$this->userModel->getusers();
        $data=$this->userModel->getreviews();
        $dump=$this->userModel->getall();
        
        
       
        $this->view('reviews',$data,$a,$dump);
    }
    
}
