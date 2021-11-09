<?php
class products extends Controller {
    public function __construct() {
        $this->productModel = $this->model('product');
    }
public function details(){
    $item_id=$_GET["id"];
    $data = [
        'item_id' => '',
        'item_rating' => '',
            
        'item_brand' => '',
        'item_name' => '',
        'item_price' => '',
        'item_qte' => '',
        'item_image' => '',
        'item_details' => '',
        'item_discount' => ''
        
    ];
    
    $ow=$this->productModel->getProduct($item_id);
    $aa=$this->productModel->getreviews($item_id);
    $dump=$this->productModel->getbrand();
    
    
    $data = [
        'item_id' => $ow->item_id,
        'item_rating' => $ow->item_rating,
            
        'item_brand' => $ow->item_brand,
        'item_name' => $ow->item_name,
        'item_price' => $ow->item_price,
        'item_qte' => $ow->item_qte,
        'item_image' => $ow->item_image,
        'item_details' => $ow->item_details,
        'item_discount' => $ow->item_discount
        
    ];
    

    

    
    
   
    

    $this->view('product',$data ,$aa,$dump);

}





    public function addreview(){
        $data = [
            
            
            'pseudo' => '',
             
            'id' => '',

            'email' => '',
            'rating' => '',
          
            'review' => '',
           
            'reviewError' => ''
        ];
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
            // Sanitize POST data
        
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(!isset($_POST['rating'])){
                $r=0;
            }
            else{
                $r=trim($_POST['rating']);
            }
           
    
                  $data = [
                   
                    'pseudo' => trim($_POST['pseudo']),
                    'email' => trim($_POST['email']),
                    'id' => trim($_POST['user_id']),
                    'id_item' => trim($_POST['item_id']),
                    'review' => trim($_POST['review']),
                    'rating' => $r,
                    'item_rating' => trim($_POST['item_rating']),
                    'date' => trim($_POST['date']),
                    
                   
                    'reviewError' => ''
                ];
                if (empty($data['reviewError'])) {

                    
                    
                    if ($this->productModel->addreview($data)) {
                        $rate=($data['item_rating']+$data['rating'])/2;
                        $this->productModel->changerating($rate,$data['id_item']);
                        
                       
                        
                        header('location:'.URLROOT.'/products/details?id='. $data['id_item']);
                    } else {
                        die('Something went wrong.');
                    }
                }
            
    }
    
}
    
}





