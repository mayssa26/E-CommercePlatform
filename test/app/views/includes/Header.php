

<!-- HEADER -->
<header>
    <!-- top Header -->
    
    <!-- /top Header -->

    <!-- header -->
    
 
 
    <div id="header">
    
    
    
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="<?php echo URLROOT ?>">
                        <img src="<?php echo URLROOT ?>\public\img\logo.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->
                <?php
                                 $sumall=0;
                                 $nbrcart=0; 
								 foreach($_SESSION['allprod'] as $item){
									 if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
										if (array_key_exists($item->item_id, $_SESSION['cart'])){
                                            $sumall+=($item->item_price/100)*(100-$item->item_discount)*$_SESSION['cart'][$item->item_id];
                                            $nbrcart++;
									 ?>
                 <?php } ?>
                 <?php } ?>
                 <?php } ?>
                

                <!-- Search -->
                <div class="header-search">
                    <form action="<?php echo URLROOT ?>/pages/products" method="POST">
                        <input class="input search-input" name="recherche" type="text" placeholder="Enter your keyword">
                        <select class="input search-categories">
                            <option value="0">All Categories</option>
                            
                        </select>
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- /Search -->
            </div>
            
            <div class="pull-right">
                <ul class="header-btns">
                    <!-- Account -->
                   
                    <li class="header-account dropdown default-dropdown">
                        <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-user-o"></i>
                            </div>
                            <strong class="text-uppercase"><?=$_SESSION["pseudo"] ?? "My Account";?> <i class="fa fa-caret-down"></i></strong>
                        </div>
                        <?php if(isset($_SESSION['user_id'])) : $log="logout";?>
                            <a href="<?php echo URLROOT ?>/users/logout" class="text-uppercase" >Logout </a>
                        <?php else : $log="login" ;?>
                            <a href="<?php echo URLROOT ?>/users/login" class="text-uppercase" >Login </a> / <a href="<?php echo URLROOT ?>/users/inscrit" class="text-uppercase" >JOIN </a>
                        <?php endif ; ?>

                        <ul class="custom-menu">
                            <li><a href="<?php echo URLROOT ?>/pages/profile"><i class="fa fa-user-o"></i> My Account</a></li>
                            <li><a href="<?php echo URLROOT ?>/pages/wishlist"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                           
                            <li><a href="<?php echo URLROOT ?>/pages/checkout"><i class="fa fa-check"></i> Checkout</a></li>
                            <li><a href="<?php echo URLROOT ?>/users/<?=$log?>"><i class="fa fa-unlock-alt"></i><?=$log?></a></li>
                            <?php if(checkLoggedIn()){ ?>
                            <li><a href="<?php echo URLROOT ?>/users/inscrit"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <!-- /Account -->

                    <!-- Cart -->
                    <li class="header-cart dropdown default-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <div class="header-btns-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span class="qty"><?php echo $nbrcart ?></span>
                            </div>
                            <strong class="text-uppercase">My Cart:</strong>
                            <br>
                            <span><?php echo $sumall?>$</span>
                        </a>
                        <div class="custom-menu">
                            <div id="shopping-cart">
                               
                                <div class="shopping-cart-list">
                               
                                <?php
								 $s=0; 
								 foreach($_SESSION['allprod'] as $item){
									 if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
										if (array_key_exists($item->item_id, $_SESSION['cart'])){
											$s+=($item->item_price/100)*(100-$item->item_discount);
									 ?>
                                    <div class="product product-widget">
                                        <div class="product-thumb">
                                        <div id="feadback"></div>
                                            <img src="<?php $img=$item->item_image ;
									$imgs=explode(',',$img);
									
									echo ($imgs[0]);?>" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h2 class="product-price">$<?php echo ($item->item_price/100)*(100-$item->item_discount );?>  <span class="qty">  x<?php echo($_SESSION['cart'][$item->item_id]); ?></span></h3>
                                            <?php foreach($_SESSION['allbrands'] as $br){
                                                if($br->brand_id==$item->item_brand){

                                             ?>
                                            <h2 class="product-name"><a href="#"><?php echo ($br->brand_name );?></a></h2>
                                            <?php } ?>
                                            <?php } ?>
                                        </div>
                                        <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                    </div> 
                                    <?php } ?>
                                <?php }?>
                                <?php }?>
                                </div>
                              
                                <div class="shopping-cart-btns">
                                    <button class="main-btn" ><a href="<?php echo URLROOT ?>/pages/cart"> View Cart</a></button>
                                    <button class="primary-btn"><a href="<?php echo URLROOT ?>/pages/checkout"> Check Out</a> <i class="fa fa-arrow-circle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- /Cart -->

                    <!-- Mobile nav toggle-->
                    <li class="nav-toggle">
                        <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                    </li>
                    <!-- / Mobile nav toggle -->
                </ul>
            </div>
        </div>
        <!-- header -->
    </div>
    <!-- container -->
</header>
<!-- /HEADER -->