<!DOCTYPE html>
<html lang="en">
<?php if(checkLoggedIn()){ 

$_SESSION['msglog']='you must log in to continue !';
header('location:' . URLROOT . '/users/login');
} ?>
    <head>
        <meta charset="utf-8">


        <!-- Template Stylesheet -->
        <link href="http://localhost/test/public/profile/css/style.css" rel="stylesheet">
        




	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo URLROOT ?>/public/css/bootstrap.min.css" />

	

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?php echo URLROOT ?>/public/css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/font-awesome.min.css">

	
	<link type="text/css" rel="stylesheet" href="<?php echo URLROOT ?>/public/css/styles.css" />
   
	
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css" />
    <?php
require("includes/Head.php");

?>

    </head>

    <body>
    <?php
require("includes/Header.php");
require("includes/Navigation.php");
?>
        
        
     
        
      
        
         <!-- Wishlist Start -->
         <div class="wishlist-page">
            <div class="container-fluid">
                <div class="wishlist-page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Add to Cart</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                    <?php foreach ($data['array'] as $prod) { ?>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="<?php $img=$prod->item_image ;$imgs=explode(',',$img);echo ($imgs[0]);?>" alt="Image"></a>
                                                    <p><?php $prod->item_name ?></p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                    <form action="<?php echo URLROOT ?>/wishlist/addfromwish"  method="POST">
                                            <td>
                                                <div class="qty">
                                                    <button type=button class="btn-minus" ><i class="fa fa-minus"></i></button>
                                                    
                                                    <input type="text" name="qte" value="1">
                                                    <button type=button class="btn-plus"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </td>
                                            <input type="hidden" name="item_id" value="<?php echo($prod->item_id)?>">
                                    
                                            <td><button class="btn-cart" type="submit">Add to Cart</button></td>
                                    </form>
                                    <form  action=  "<?php echo URLROOT ?>/wishlist/deletefromwish"  method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo($prod->item_id)?>">
                                            <td><button><i class="fa fa-trash" type="submit"></i></button></td>
                                      </form>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist End -->
        
        
        
       
        <?php
require("includes/footer.php");

?>
 <!-- JavaScript Libraries -->

        <script src="http://localhost/test/public/profile/lib/easing/easing.min.js"></script>
        <script src="http://localhost/test/public/profile/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="http://localhost/test/public/profile/js/main.js"></script>
        
    </body>
</html>
