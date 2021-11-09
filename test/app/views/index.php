

<!DOCTYPE html>
<html lang="en">
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

<!-- HOME -->
<div id="home">
<?php $path="/cart/addCart" ;
								$method="POST";
								 if(!isset($_SESSION['user_id']) ){
									 $path="/users/login";
									 
									 
								 } 
								 ?>
		<!-- container -->
		<div class="container" >
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
			<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="<?php echo URLROOT ?>\public\img\b1.jpg" alt="">
						<div style="left:200px;"class="banner-caption text-center">
							<h1 style="color:red">SALE</h1>
							<h3 class="font-weak" style="color:red">Up to 30% Discount</h3>
							<button  onclick="window.location.href='<?php echo URLROOT ?>/pages/products?id=4'"class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="<?php echo URLROOT ?>\public\img\b2.jpg" alt="">
						<div style="left:250px;" class="banner-caption">
							<h1 class="primary-color">HOT DEAL<br><span class="primary-color">Up to 50% OFF</span></h1>
							<button onclick="window.location.href='<?php echo URLROOT ?>/pages/products?id=1'" class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="<?php echo URLROOT ?>\public\img\b3.jpg" alt="">
						<div style="left:480px;top:450px"class="banner-caption">
							<h1 class="white-color">New Product <span>Collection</span></h1>
							<button onclick="window.location.href='<?php echo URLROOT ?>/pages/products?id=3'" class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->
	

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="<?php echo URLROOT ?>\public\img\11.jpg" alt="">
						
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="<?php echo URLROOT ?>\public\img\61.jpg" alt="">
						<div style="left:162px;" class="banner-caption text-center">
							<h3 class="white-color">NEW COLLECTION</h3>
						</div>
						
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="#">
						<img src="<?php echo URLROOT ?>\public\img\41.jpg" alt="">
						
					</a>
				</div>
				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="product-thumb">
							<div class="product-label">
							</div>
							<ul class="product-countdown">
								<li><span>00 H</span></li>
								<li><span>00 M</span></li>
								<li><span>00 S</span></li>
							</ul>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="<?php echo URLROOT ?>\public\img\61.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$3000</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">ASUS GL75</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				<!-- mena -->
				

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
							<?php foreach($data as $item ){ ?>
								<?php if($item->id_cat== 1){ ?>
							
							

							<!-- Product Single -->
							
							<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span>New</span>
										<span class="sale">-<?php echo ($item->item_discount )?>%</span>
									</div>
									
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="<?php echo URLROOT ?>/products/details?id=<?php echo($item->item_id);?>"> Quick view</a></button>
									<img src="<?php $img=$item->item_image ;$imgs=explode(',',$img);echo ($imgs[0]);?>" alt="">
									
								</div>
								
								
								<div class="product-body">
									<h3 class="product-price">$<?php echo ($item->item_price/100)*(100-$item->item_discount)?> <del class="product-old-price">$<?php echo ($item->item_price )?></del></h3>
									<div class="product-rating">
									<?php $n=intval($item->item_rating);for ($i = 1; $i <= $n; $i++) {?>
								    <i class="fa fa-star"></i>
								      <?php } ?>

								    <?php for ($i = 1; $i <= 5-$n; $i++) {?>
								    <i class="fa fa-star-o empty"></i>
								     <?php } ?>
									</div>
									<?php foreach($_SESSION['allbrands'] as $bran){
										if($bran->brand_id==$item->item_brand){
										$brand_name=$bran->brand_name;
									}}?> 
									<h2 class="product-name"><a href="#"><?php echo $brand_name?>  </a></h2>
									<div class="product-btns">
									<form action=  "<?php echo URLROOT ?><?php echo $path ?>"  method="<?php echo $method?>" >
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>
									<input type="hidden" name="item_id" value="<?php echo($item->item_id);?>" >
										
										<input type="hidden" name="user_id" value="<?php  if(isset($_SESSION['user_id']) ){  echo ($_SESSION['user_id']) ;}?>">
										<input type="hidden" name="qte" value="1">
								<button type="submit" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								</form>
									</div>
								</div>
							</div>
							<?php } ?>

							<?php } ?>
							<!-- /Product Single -->
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
				<!-- lmenna -->
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Deals Of The Day</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots">
							</div>
						</div>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single product-hot">
						<div class="product-thumb">
							<div class="product-label">
							</div>
							<ul class="product-countdown">
								<li><span>00 H</span></li>
								<li><span>00 M</span></li>
								<li><span>00 S</span></li>
							</ul>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="<?php echo URLROOT ?>\public\img\pc11.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$3000</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">ASUS GL75</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<form action=  "<?php echo URLROOT ?>/cart/addCart"  method="<?php echo $method?>" >
								<button type="submit" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
						<?php foreach($data as $item ){ ?>
								<?php if(($item->id_cat == 2) || ($item->id_cat == 4) ){ ?>
							
							

						<!-- Product Single -->
							
						<div class="product product-single">
								<div class="product-thumb">
									<div class="product-label">
										<span>New</span>
										<span class="sale">-<?php echo ($item->item_discount )?>%</span>
									</div>
									
									<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="<?php echo URLROOT ?>/products/details?id=<?php echo($item->item_id);?>"> Quick view</a></button>
									<img src="<?php $img=$item->item_image ;$imgs=explode(',',$img);echo ($imgs[0]);?>" alt="">
									
								</div>
								
								
								<div class="product-body">
									<h3 class="product-price">$<?php echo ($item->item_price/100)*(100-$item->item_discount)?> <del class="product-old-price">$<?php echo ($item->item_price )?></del></h3>
									<div class="product-rating">
									<?php $n=intval($item->item_rating);for ($i = 1; $i <= $n; $i++) {?>
								    <i class="fa fa-star"></i>
								      <?php } ?>

								    <?php for ($i = 1; $i <= 5-$n; $i++) {?>
								    <i class="fa fa-star-o empty"></i>
								     <?php } ?>
									</div>
									<?php foreach($_SESSION['allbrands'] as $bran){
										if($bran->brand_id==$item->item_brand){
										$brand_name=$bran->brand_name;
									}}?> 
									<h2 class="product-name"><a href="#"><?php echo $brand_name?>  </a></h2>
									<div class="product-btns">
									<form action=  "<?php echo URLROOT ?><?php echo $path ?>"  method="<?php echo $method?>" >
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<input type="hidden" name="item_id" value="<?php echo($item->item_id);?>" >
										<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>
										
										<input type="hidden" name="user_id" value="<?php  if(isset($_SESSION['user_id']) ){  echo ($_SESSION['user_id']) ;}?>">
										<input type="hidden" name="qte" value="1">
								<button type="submit" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								</form>
									</div>
								</div>
							</div>
							<?php } ?>

							<?php } ?>
							<!-- /Product Single -->
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">BEST DEALS</h2>
					</div>
				</div>
				<!-- section title -->
				<?php foreach($data as $item ){ ?>
					<?php if($item->item_discount >32){ ?>
				

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="<?php echo URLROOT ?>/products/details?id=<?php echo($item->item_id);?>"> Quick view</a></button>
							<img src="<?php $img=$item->item_image ;
									$imgs=explode(',',$img);
									
									echo ($imgs[0]);?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$<?php echo ($item->item_price/100)*(100-$item->item_discount)?></h3>
							<div class="product-rating">
							<?php $n=intval($item->item_rating);for ($i = 1; $i <= $n; $i++) {?>
								    <i class="fa fa-star"></i>
								      <?php } ?>

								    <?php for ($i = 1; $i <= 5-$n; $i++) {?>
								    <i class="fa fa-star-o empty"></i>
								     <?php } ?>
							</div>
							<?php foreach($_SESSION['allbrands'] as $bran){
										if($bran->brand_id==$item->item_brand){
										$brand_name=$bran->brand_name;
									}}?> 
							<h2 class="product-name"><a href="#"><?php echo $brand_name ; ?> </a></h2>
							<div class="product-btns">
							<form action=  "<?php echo URLROOT ?><?php echo $path ?>"  method="<?php echo $method?>" >
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>
									<input type="hidden" name="item_id" value="<?php echo($item->item_id);?>" >
										
										<input type="hidden" name="user_id" value="<?php  if(isset($_SESSION['user_id']) ){  echo ($_SESSION['user_id']) ;}?>">
										<input type="hidden" name="qte" value="1">
								<button type="submit" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
				<?php } ?>
				<?php } ?>

				
			</div>
			<!-- /row -->


			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
				</div>
				<!-- section title -->
				<?php foreach($data as $item ){ ?>
					<?php if($item->id_cat==5){ ?>
							
							


			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i><a href="<?php echo URLROOT ?>/products/details?id=<?php echo($item->item_id);?>"> Quick view</a></button>
							<img src="<?php $img=$item->item_image ;
									$imgs=explode(',',$img);
									
									echo ($imgs[0]);?>" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$<?php echo ($item->item_price/100)*(100-$item->item_discount)?></h3>
							<div class="product-rating">
							<?php $n=intval($item->item_rating);for ($i = 1; $i <= $n; $i++) {?>
								    <i class="fa fa-star"></i>
								      <?php } ?>

								    <?php for ($i = 1; $i <= 5-$n; $i++) {?>
								    <i class="fa fa-star-o empty"></i>
								     <?php } ?>
							</div>
							<?php foreach($_SESSION['allbrands'] as $bran){
										if($bran->brand_id==$item->item_brand){
										$brand_name=$bran->brand_name;
									}}?> 
							<h2 class="product-name"><a href="#"><?php echo $brand_name ; ?> </a></h2>
							<div class="product-btns">
							<form action=  "<?php echo URLROOT ?><?php echo $path ?>"  method="<?php echo $method?>" >
										<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
										<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
										<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>
									<input type="hidden" name="item_id" value="<?php echo($item->item_id);?>" >
										
										<input type="hidden" name="user_id" value="<?php  if(isset($_SESSION['user_id']) ){  echo ($_SESSION['user_id']) ;}?>">
										<input type="hidden" name="qte" value="1">
								<button type="submit" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->

				<?php } ?>
				<?php } ?>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	
  <?php
require("includes/Footer.php");
?>
<script type="text/javascript">

$(".add-to-cart").each(function(){
	
	$(this).on('click',function(){
		
		$.ajax(
			{url : "http://localhost/test/pages/testv2",
          type: "POST",
		  cache: false,
		  //data:{'id':id},
		  dataType: "json",
          
          success:function(data){
			alert("hello");
				$("div#feadback").html(data.item);
		  }}
		);
	});
});
</script>
</body>
</html>