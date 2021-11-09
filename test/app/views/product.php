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
<?php foreach($dump as $bran){
		
		if($bran->brand_id==$data['item_brand']){
			$brand_name=$bran->brand_name;
		}
	}
	?> 

	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Products</a></li>
				<li><a href="#">Category</a></li>
				<li class="active"><?php echo $brand_name ?></li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->
	
	

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					
					<div class="col-md-6">
						<div id="product-main-view">
						<?php $img=$data['item_image']; ;
									$imgs=explode(',',$img);
									
									foreach($imgs as $ig){
									?>
							<div class="product-view">
								<img src="<?php echo $ig ; ?>" alt="">
								
							</div>
							<?php } ?>
							
						</div>
						<div id="product-view">
						   <?php foreach($imgs as $ig){
									?>
							<div class="product-view">
								
								<img src="<?php echo $ig ; 
								 ?>"
								  alt="">
							</div>
							
							<?php } ?>
							
							
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>New</span>
								<span class="sale">-<?php echo $data['item_discount']; ?>%</span>
							</div>
							<h2 class="product-name"><?php echo $brand_name ?>  <?php echo $data['item_name'] ?></h2>
							<h3 class="product-price">$<?php echo (($data['item_price']/100)*(100-$data['item_discount']) ) ; ?> <del class="product-old-price">$<?php echo $data['item_price']; ?></del></h3>
							<div>
								<div class="product-rating">
								<?php $n=intval($data['item_rating']);for ($i = 1; $i <= $n; $i++) {?>
								<i class="fa fa-star"></i>
								<?php } ?>

								<?php for ($i = 1; $i <= 5-$n; $i++) {?>
								<i class="fa fa-star-o empty"></i>
								<?php } ?>
								</div>
								<a href="#"><?php echo(count($aa));?> Review(s) / Add Review</a>
							</div>
							<p><strong>Availability:</strong> <?php echo $data['item_qte'] ?></p>
							<p><strong>Brand:</strong> <?php echo $brand_name ?></p>
							<p><?php echo (utf8_encode($data['item_details'] ))?></p>
							<div class="product-options">
								<ul class="size-option">
									
								</ul>
							
							</div>

							<div class="product-btns">
								<?php $path="/cart/addCart" ;
								$method="POST";
								 if(!isset($_SESSION['user_id']) ){
									 $path="/users/login";
									 
									 
								 } 
								 ?>
							<form  action=  "<?php echo URLROOT ?><?php echo $path ?>"  method="<?php echo $method?>" >
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number" name="qte"  min=1 max=<?php echo $data['item_qte']?> value=1 >
									<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>


									<?php if(isset($_SESSION['user_id']) ){ ?>
									<input type="hidden" name="item_id" value="<?php echo($data['item_id']);?>" >
									
									<input type="hidden" name="user_id" value="<?php echo ($_SESSION['user_id']) ;?>" >
									<?php } ?>
								</div>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</form>
							<?php $path2="/wishlist/addwishlist" ;
								$method="POST";
								 if(!isset($_SESSION['user_id']) ){
									 $path2="/users/login";
									 
									 
								 } 
								 ?>
								<div class="pull-right">
								
								
								<form  action=  "<?php echo URLROOT ?><?php echo $path2 ?>"  method="POST" >
									<button class="main-btn icon-btn" type="submit"><i class="fa fa-heart"></i></button>
									<input type="hidden" name="item_id" value="<?php echo($data['item_id']);?>" >
									<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>
								

									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								
								<li><a data-toggle="tab" href="#tab2">Reviews (<?php echo(count($aa));?>)</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p><?php echo (utf8_encode($data['item_details'] ))  ?></p>
								</div>
								<div id="tab2" class="tab-pane fade in">

									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
											<?php foreach($aa as $review ){ ?>

												<div class="single-review">
													<div class="review-heading">
														<div><a href="#"><i class="fa fa-user-o"></i> <?php echo($review->nom) ?></a></div>
														<div><a href="#"><i class="fa fa-clock-o"></i> <?php echo($review->date) ?></a></div>
														<div class="review-rating pull-right">
														<?php $n=intval($review->rating);for ($i = 1; $i <= $n; $i++) {
															?>
														


															<i class="fa fa-star"></i>
															<?php } ?>
															
															<?php for ($i = 1; $i <= 5-$n; $i++) {
															?>
															<i class="fa fa-star-o empty"></i>
															<?php } ?>
														</div>
													</div>
													<div class="review-body">
														<p><?php echo($review->reviw) ?>.</p>
													</div>
												</div>
												<?php } ?>

												

												
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Write Your Review</h4>
											
											<p>Your email address will not be published.</p>
											<?php $path="/products/addreview" ;
								                  $method="POST";
								                if(!isset($_SESSION['user_id']) ){
													 $path="/users/login";
												}
												?>
									 
									 
								
								
											<form class="review-form"  action="<?php echo URLROOT ?><?php echo $path ?>"  method="<?php echo $method?>">
												<div class="form-group">
													<input class="input" type="text" value="<?php if(isset($_SESSION['user_id']) ){
														echo $_SESSION['pseudo'];}?>" placeholder="Your Name" name="pseudo" readonly />
												</div>
												<div class="form-group">
													<input class="input" type="email" value="<?php if(isset($_SESSION['user_id']) ){
														echo $_SESSION['email'];}?>" placeholder="Email Address" name="email" readonly/>
														<?php if(isset($_SESSION['user_id']) ){ ?>
									                 <input type="hidden" name="item_id" value="<?php echo($data['item_id']);?>" >
													 <input type="hidden" name="item_rating" value="<?php echo($data['item_rating']);?>" >
									
									                 <input type="hidden" name="user_id" value="<?php echo ($_SESSION['user_id']) ;?>" >
													 <input type="hidden" name="date" value="<?php echo (date("Y/m/d  | H:i")) ?> " >
												
									                 <?php } ?>
												</div>
												<div class="form-group">
													<textarea class="input" placeholder="Your review" name="review"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<?php if(!isset($_SESSION['user_id']) ){ ?>
										<input type="hidden" name="msg" value="you must log in to continue !" >
									<?php } ?>
												<button class="primary-btn" type="submit">Submit</button>
											</form>
										</div>
									</div>



								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->


	<?php
require("includes/Footer.php");
?>
</body>
</html>