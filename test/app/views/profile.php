<!DOCTYPE html>
<html lang="en">
<?php if(checkLoggedIn()){ 

    $_SESSION['msglog']='you must log in to continue !';
    header('location:' . URLROOT . '/users/login');
} ?>

<head>
    
<!-- Template Stylesheet -->
<link href="http://localhost/test/public/profile/css/style.css" rel="stylesheet">





  <!-- Template Stylesheet -->
  <link href="http://localhost/test/public/test/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

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
  <?php paramChaged($data->first_name,$data->last_name,$data->email,$data->telephone,$data->addresse);
  profileError();
  passError(); 
  ?>
<hr>
<?php  passchanged(); ?>

<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo($data->first_name)?> <?php echo($data->last_name)?></h1></div>
    
    </div>
    <div class="row">
          <div class="col-sm-3"><!--left col-->
          
        
              

      <div class="text-center">
        <img src="<?php echo($data->img_user) ?>" height="192" width="192" class="avatar img-circle img-thumbnail" alt="avatar">
        
        <form action="<?php echo URLROOT ?>/profile/updateimg" enctype="multipart/form-data" method="POST">
        <input type="file" name="user_img" class="text-center center-block file-upload">
        <br>
        <button class="btn" type="submit">Save Changes</button>
    </form>
      </div></hr><br>
      <?php $s=0;foreach($aa as $order){ 
              
                  if($_SESSION['user_id']==$order->id_user){$s++; }}?>

               
    
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Orders</strong></span> <?php echo $s ?></li>
       
          </ul> 
               
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li><a data-toggle="tab" href="#messages">Orders</a></li>
                <li><a data-toggle="tab" href="#settings">My wishlist</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                 
                  <h4>Account Details</h4>
                  <form action="<?php echo URLROOT ?>/profile/update"  method="POST">
                                <div class="row">
                                   
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="First Name" name="first_name" value="<?php echo($data->first_name)?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Last Name" name="last_name" value="<?php echo($data->last_name)?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Mobile" name="telephone" value="<?php echo($data->telephone)?>">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" placeholder="Email" name="email" value="<?php echo($data->email)?>">
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" placeholder="Address" name="addresse" value="<?php echo($data->addresse)?>">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn" type="submit">Update Account</button>
                                        <br><br>
                                    </div>
                                
                                </div>
                                </form>
                                <h4>Password change</h4>
                                <form action="<?php echo URLROOT ?>/profile/updatepass"  method="POST">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="form-control" type="password" name="pass" placeholder="Current Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="newpass" placeholder="New Password">
                                    </div>
                                    <div class="col-md-6">
                                        <input class="form-control" type="text" name="newpass2" placeholder="Confirm Password">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>
              	
              
              <hr>
              
             </div><!--/tab-pane-->
             
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr><div class="wishlist-page">
               <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name client</th>
              <th colspan=3>Products</th>
              
              <th>TOTAL</th>
              <th>DATE</th>
			  
            </tr>
          </thead>
          
          <!-- Modal -->
          <tbody id="customer_list">
		  <?php foreach($aa as $order){ 
              $prods=explode(',',$order->id_prod);
              $qtes=explode(',',$order->qte);
             
              $m=sizeof($prods);
              $m+=1;?>
              <?php 
                  if($_SESSION['user_id']==$order->id_user){?>
              
              
             <tr>

              <td rowspan="<?php echo($m)?>"><?php echo($order->id_order)?></td>
             


              <td rowspan="<?php echo($m)?>"><?php echo($data->first_name)?> <?php echo($data->last_name)?></td>
             
              
              <td>Prod name</td>
              <td>Details</td>
              <td>Qte</td>
              
            
             
              
              <td rowspan="<?php echo($m)?>">$<?php echo($order->total)?></td>
              <td rowspan="<?php echo($m)?>"><?php echo($order->datecom)?></td>
            
             
            </tr> 
            <?php foreach($dump as $prod){ 
                  
                  if(in_array($prod->item_id,$prods)){ 
                    $key = array_search($prod->item_id, $prods);?>
                  
                  
                  
                  <tr><td><img src="<?php $img=$prod->item_image ;
									$imgs=explode(',',$img);
									
                                    echo ($imgs[0]);?>" width="60" height="60" alt=""></td>
                                    
                            
                            <td><button onclick="window.location.href='<?php echo URLROOT ?>/products/details?id=<?php echo($prod->item_id);?>';" class="wishlist-page table button"  style="width:62px;padding-top:7px;padding-bottom:25px" >VIEW</button></td>
                            <td>x<?php echo($qtes[$key])?></td>
                            <style> .wishlist-page .table button { height: 10px; width: 100px; } </style> 
                        
                    </tr>
                    
                                  
                                      <?php } ?>
              <?php } ?>
           
			<?php } ?>
            <?php } ?>
          </tbody>
        </table>
                  </div>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">
            		
               	
                  <hr>
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
                                    <?php foreach ($dat['array'] as $prod) { ?>
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="<?php $img=$prod->item_image ;$imgs=explode(',',$img);echo ($imgs[0]);?>" alt="Image"></a>
                                                    <p><?php $prod->item_name ?></p>
                                                </div>
                                            </td>
                                            <td>$99</td>
                                    <form action= "<?php echo URLROOT ?>/wishlist/addfromwish"  method="POST">
                                            <td>
                                                <div class="qty text-center">
                                                    
                                                    
                                                    <input type="text" name="qte" value="1">
                                                    
                                                </div>
                                            </td>
                                            <input type="hidden" name="item_id" value="<?php echo($prod->item_id)?>">
                                    
                                            <td><button class="btn" style="width:62px;padding-top:7px;padding-bottom:25px" type="submit">Add </button></td>
                                    </form>
                                    <form  action=  "<?php echo URLROOT ?>/wishlist/deletefromwish"  method="POST">
                                    <input type="hidden" name="item_id" value="<?php echo($prod->item_id)?>">
                                            <td><button style="width: 32px;height: 32px;padding-left: 1px;padding-right:10px"><i class="fa fa-trash" style="padding-left: 7px" type="submit"></i></button></td>
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
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->


					<?php
require("includes/Footer.php");
?>
 <!-- JavaScript Libraries -->

 <script src="http://localhost/test/public/profile/lib/easing/easing.min.js"></script>
        <script src="http://localhost/test/public/profile/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="http://localhost/test/public/profile/js/main.js"></script>

        <script type="text/javascript">
        setTimeout(function(){
          $('.alert').removeClass("show");
          $('.alert').addClass("hide");
        },5000);
      
      $('.close-btn').on("click",function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
      });
    </script>
       
</body>
</html>






















    <script></script>
                                                      