<?php
class Pages extends Controller {
    public function __construct() {
        
            $this->productModel = $this->model('product');
            $this->cartModel = $this->model('Mcart');
            $this->wishModel = $this->model('Mwishlist');
            $this->orderModel = $this->model('Morder');
            $this->userModel = $this->model('User');
        
    }

    public function index() {
        $data = [
            
            'item_brand' => '',
            'item_name' => '',
            'item_price' => '',
            'item_qte' => '',
            'item_image' => '',
            'item_details' => '',
            'id_cat' =>'',
            'item_rating'  => '',
            'item_discount'  => ''
    
            
        ];
        $data=$this->productModel->getallpc();
        $aa=$this->productModel->getcat();
        $brand=$this->productModel->getbrand();
        $_SESSION['cat']=$aa;
        $_SESSION['allbrands']=$brand;
        $_SESSION['allprod']=$data;
        
        $this->view('index',$data,$aa );
    }
    public function products() {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $name=$_POST['recherche'];
            $dat=$name;
        }else{
            $dat=[];
        }
        if(isset($_GET["id"])){
        $idcat=$_GET["id"];
        $_SESSION['idcat']=$idcat;
        }
        $data = [
            
            'item_brand' => '',
            'item_name' => '',
            'item_price' => '',
            'item_qte' => '',
            'item_image' => '',
            'item_details' => '',
            'id_cat' =>'',
            'item_rating'  => '',
            'item_discount'  => ''
    
            
        ];
        $data=$this->productModel->getallpc();
        $aa=$this->productModel->getcat();
        $dump=$this->productModel->getbrand();
        
        
        $this->view('products',$data,$aa,$dump,$dat);
    }
   
  



    public function checkout() {
        $id=$_SESSION['user_id'];
        $data=$this->userModel->getuser($id);
        
        
        
        
        $this->view('checkout',$data);
    }
   
   
    public function profile() {
        $aa=$this->orderModel->getorders();
        $dump=$this->productModel->getallpc();
        $id_user=$_SESSION['user_id'];
        $array = array();
        $op=$this->wishModel->getalllists($id_user);
        foreach($op as $item){
            $p=$this->productModel->getProduct($item->product_id);
            array_push($array,$p);
        }
        $dat['array']=$array;
        $data=$this->userModel->getuser($_SESSION['user_id']);
        $this->view('profile',$data,$aa,$dump,$dat);
    }

    
    


    
public function Cart(){
    $id_user=$_SESSION['user_id'];
    $data = [
        'item_id' => "",
            
        'item_brand' => "",
        'item_name' =>  "",
        'item_price' =>  "",
        'item_qte' =>  "",
        'item_image' =>  "",
        'item_discount' =>  ""
        
    ];

        
$data=$this->productModel->getallpc();
$_SESSION['allprod']=$data;

        $this->view('cart', $data);

    }
    public function wishlist(){
        $id_user=$_SESSION['user_id'];
       

            $array = array();
    
            $op=$this->wishModel->getalllists($id_user);
 
            foreach($op as $item){
                $p=$this->productModel->getProduct($item->product_id);

    
                array_push($array,$p);
                
    
            }
 
            $data['array']=$array;

            $this->view('wishlist', $data);

          
        }
        public function test(){
            
    
                $this->view('test');
    
              
            }
            public function test2(){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              
                var_dump($_POST);
            
    
                
    
              
            }




   

}

