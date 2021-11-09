<!DOCTYPE html>
<html lang="en">
<?php if(checkLoggedIn()){ 

$_SESSION['msglog']='you must log in to continue !';
header('location:' . URLROOT . '/users/login');
} ?>
<head>
<link href="http://localhost/test/public/test/style.css" rel="stylesheet">
    <?php
        require("includes/Head.php");
    ?>
    <title>E-Shop</title>
   
</head>
<body>
<?php
ob_start();


require("includes/Header.php");
require("includes/Navigation.php");
if(!isset($_SESSION['cart'])){
    cartempty();
    header( "refresh:4;url=http://localhost/test/pages/products" );
    ob_end_flush();
}




?>

      
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Billing Address</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" value="<?php echo($data->first_name) ?>" placeholder="First Name" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text"  value="<?php echo($data->last_name) ?>" placeholder="Last Name" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>E-mail</label>
                                        <input class="form-control" type="text"  value="<?php echo($data->email) ?>" placeholder="E-mail" readonly>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Mobile No</label>
                                        <input class="form-control" type="text"  value="<?php echo($data->telephone) ?>" placeholder="Mobile No" readonly>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text"  value="<?php echo($data->addresse) ?>" placeholder="Address" readonly>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <label>State</label>
                                        <input class="form-control" type="text" placeholder="State">
                                    </div>
                                    <div class="col-md-6">
                                        <label>ZIP Code</label>
                                        <input class="form-control" type="text" placeholder="ZIP Code">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Country</label>
                                        <select class="custom-select">
                                            <option selected>United States</option>
                                            <option>Afghanistan</option>
                                            <option>Albania</option>
                                            <option>Algeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>City</label>
                                        <input class="form-control" type="text" placeholder="City">
                                    </div>
                                    
                                </div>
                            </div>

                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Cart Total</h1>


                                <?php
                             
                                
								 $s=0; 
								 foreach($_SESSION['allprod'] as $item){
									 if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
										if (array_key_exists($item->item_id, $_SESSION['cart'])){
										
									 ?>
                                 <p><?php echo($item->item_name )?>  x<?php echo($_SESSION['cart'][$item->item_id] )?>  <span>   $<?php echo ((($item->item_price/100)*(100-$item->item_discount))*$_SESSION['cart'][$item->item_id] ) ;$s=$s+(($item->item_price/100)*(100-$item->item_discount))*$_SESSION['cart'][$item->item_id]; ?></span></p>
                                <?php }?>
                                <?php }?>
                                <?php }?>



                              
                               
                   
                                <p class="sub-total">Sub Total<span>$<?php echo($s)?></span></p>
                                <p class="ship-cost">Shipping Cost<span>$1</span></p>
                                <h2>Grand Total<span>$<?php echo($s+1);$_SESSION['ordersum']=$s+1;?></span></h2>
                            </div>

                            <div class="checkout-payment">
                                <div class="payment-methods">
                                    <h1>Payment Methods</h1>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-1" name="payment">
                                            <label class="custom-control-label" for="payment-1">Paypal</label>
                                        </div>
                                        
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-2" name="payment">
                                            <label class="custom-control-label" for="payment-2">Payoneer</label>
                                        </div>
                                        
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-3" name="payment">
                                            <label class="custom-control-label" for="payment-3">Check Payment</label>
                                        </div>
                                        
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-4" name="payment">
                                            <label class="custom-control-label" for="payment-4">Direct Bank Transfer</label>
                                        </div>
                                        
                                    </div>
                                    <div class="payment-method">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="payment-5" name="payment">
                                            <label class="custom-control-label" for="payment-5">Cash on Delivery</label>
                                        </div>
                                        
                                    </div>
                                </div>
                                <form class="custom-form" action=  "<?php echo URLROOT ?>/order/addorder"  method="POST">
                                <div class="checkout-btn">
                                    <button type="submit">Place Order</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
      
      
    <?php
require("includes/Footer.php");

?>
</body>
</html>
