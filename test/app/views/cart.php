<!DOCTYPE html>
<html lang="en">
<?php if(checkLoggedIn()){ 

$_SESSION['msglog']='you must log in to continue !';
header('location:' . URLROOT . '/users/login');
} ?>
<head>
    <?php
        
        require("includes/Head.php");
    ?>
    <title>E-Shop</title>
</head>
<body>
<?php


require("includes/Header.php");
require("includes/Navigation.php");
?>
<?php// var_dump($dump); ?>

<div class="col-md-12">
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
								<?php
								 $s=0; 
								 foreach($data as $item){
									 if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
										if (array_key_exists($item->item_id, $_SESSION['cart'])){
											$s+=($item->item_price/100)*(100-$item->item_discount)*$_SESSION['cart'][$item->item_id];
									 ?>
									
									

								
									<tr>
										<td class="thumb"><img src="<?php $img=$item->item_image ;
									$imgs=explode(',',$img);
									
									echo ($imgs[0]);?>
									" alt=""></td>
										<td class="details">
										<?php foreach($_SESSION['allbrands'] as $br){
                                                if($br->brand_id==$item->item_brand){

                                             ?>
											<a href="#"><?php echo ($br->brand_name );?></a>
											<?php } ?>
								            <?php } ?>
											<ul>
												<li><span><?php echo ($item->item_name );?></span></li>
												
											</ul>
										</td>
										<td class="price text-center"><strong>$<?php echo (($item->item_price/100)*(100-$item->item_discount))?></strong><br><del class="font-weak"><small>$<?php echo ($item->item_price )?></small></del></td>
										<td class="qty text-center"><input class="input" type="number" min=1 max=<?php echo($item->item_qte);?> value="<?php if($_SESSION['cart'][$item->item_id]>$item->item_qte){echo($item->item_qte);}else{echo($_SESSION['cart'][$item->item_id]);}?>"></td>
										<td class="total text-center"><strong class="primary-color">$<?php echo (($item->item_price/100)*(100-$item->item_discount)*$_SESSION['cart'][$item->item_id] )?></strong></td>
										<td class="text-right">
										    <form  action=  "<?php echo URLROOT ?>/cart/deleteCart"  method="POST" >
											     <button class="main-btn icon-btn"><i class="fa fa-close"></i></button>
											     <input type="hidden" name="item_id" value="<?php echo($item->item_id);?>" >
											</form>
										
										
										</td>
									</tr>
								<?php } ?>
								<?php } ?>
								<?php } ?>

									
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">$<?php echo ($s)?></th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">1$</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">$<?php echo ($s+1)?></th>
									</tr>
								</tfoot>
							</table>
							<form action="<?php echo URLROOT ?>/pages/checkout" >
							<div class="pull-right">
								<button type="submit" class="primary-btn">Place Order</button>
							</div>
							</form>
						</div>

					</div>



					<?php
require("includes/Footer.php");
?>
</body>
</html>