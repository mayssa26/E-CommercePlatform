
	<!-- NAVIGATION -->
	<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						<li class="dropdown side-dropdown">
						<?php $cat=$_SESSION['cat']; 
						foreach($cat as $category){
						?>
							<li><a href="<?php echo URLROOT ?>/pages/products?id=<?php echo $category->id?>"><?php echo $category->name ?></a></li>
							
						</li>
						<?php }
						?>
					</ul>
										
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						<li><a href="<?php echo URLROOT ?>/pages/index">Home</a></li>
						<li><a href="<?php echo URLROOT ?>/pages/products">Shop</a></li>
					
						<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="<?php echo URLROOT ?>/pages/index">Home</a></li>
								<li><a href="<?php echo URLROOT ?>/pages/profile">profile</a></li>
								<li><a href="<?php echo URLROOT ?>/pages/products">Products</a></li>
								<li><a href="<?php echo URLROOT ?>/pages/cart">Cart</a></li>
								<li><a href="<?php echo URLROOT ?>/pages/checkout">Checkout</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>
	<!-- /NAVIGATION -->