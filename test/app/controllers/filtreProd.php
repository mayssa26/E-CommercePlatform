<?php
class filtreProd extends Controller {
    public function __construct() {
        
            $this->userModel = $this->model('product');
        
    }

    public function ajax(){
        if(isset($_POST['brand'])){
            $val=$_POST['brand'];
  }else{
      $val=null;
  }
  if(isset($_POST['cat'])){
    $cat=$_POST['cat'];
}else{
$cat=null;
}
$min=$_POST['min'];
$max=$_POST['max'];
if(isset($_POST['recherche'])){
    $recherche=$_POST['recherche'];
}
else{
    $recherche="";
}

        
      
        $action=$_POST['action'];
        $output="";
        $cats=$this->userModel->getcat();
        $brands=$this->userModel->getbrand();
        



        
        if(!empty($this->userModel->getprod($action,$val,$cat,$min,$max,$recherche))){

        if(isset($action)){
            
            
            foreach($this->userModel->getprod($action,$val,$cat,$min,$max,$recherche) as $prod){
                $img=$prod->item_image ;
                    $imgs=explode(',',$img);
                    foreach($brands as $br){
                        if($prod->item_brand==$br->brand_id){
                            $item_brand=$br->brand_name;
                        }
                    }
                    $strrating='';
                    $n=intval($prod->item_rating);for ($i = 1; $i <= $n; $i++) {
                      
                    


                        $strrating.='<i class="fa fa-star"></i>' ;
                    }
                     
                        
                    for ($i = 1; $i <= 5-$n; $i++) {
                     
                        $strrating.='<i class="fa fa-star-o empty"></i>';
                    }
                        

                    
                    
                $output.='<div class="col-md-4 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <div class="product-label">
                            <span>New</span>
                            <span class="sale">-20%</span>
                        </div>
                        <button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="'.URLROOT.'/products/details?id='.$prod->item_id.'"> Quick view</a></button>
                        <img src="'.$imgs[0].'" alt="">
                    </div>
                    <div class="product-body">
                        <h3 class="product-price">$'.$prod->item_price.' <del class="product-old-price">$'.($prod->item_price/100)*(100-$prod->item_discount).'</del></h3>
                        
                        
                        <div class="product-rating">'.$strrating.'
                            
                        </div>
                        <h2 class="product-name"><a href="#">'.$item_brand.'</a></h2>
                        <div class="product-btns">
                            <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                            <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                            <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>';

            }

        }
        else{
            echo("not found");
        }
    }
    else{
        echo("not found");
    }
    echo($output);

      

    }



}