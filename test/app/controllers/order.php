<?php
class order extends Controller {
    public function __construct() {
        
            $this->orderModel = $this->model('Morder');
        
    }

    public function addorder() {
        $id=$_SESSION['user_id'];
        $id_prod="";
        $qte="";
        $s=0;
        foreach($_SESSION['cart'] as $itemid => $qtee){
            $qt=$qtee;
            $id_p=$itemid;
            
            $id_prod= $id_prod.','.$id_p;
            $qte=$qte.','.$qt;
            
            
            



        }


         $id_prod=substr($id_prod,1);
         $qte=substr($qte,1);
        $date=date("Y/m/d  | H:i");
        $s=$_SESSION['ordersum'];  
        unset($_SESSION['ordersum'] );

        $this->orderModel->addorder($id_prod,$qte,$s,$id,$date);
        unset($_SESSION['cart']);
        header('location:'.URLROOT);
    }
}