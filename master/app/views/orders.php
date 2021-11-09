<?php if(!isset($_SESSION['name'])){
  header('location:' . URLROOT . '/users/login');
} ?>
<?php 


include "includes/top.php"; 

?>
 
<?php include "includes/navbar.php"; ?>
<div class="container-fluid">
  <div class="row">
    
  <?php include "includes/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Customers</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-bordered table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name client</th>
              <th colspan=2>Products</th>
              
              <th>TOTAL</th>
              <th>DATE</th>
			  
            </tr>
          </thead>
          
          <!-- Modal -->
          <tbody id="customer_list">
		  <?php foreach($data as $order){ 
              $prods=explode(',',$order->id_prod);
              $qtes=explode(',',$order->qte);
             
              $m=sizeof($prods);
              $m+=1;?>
              
              
             <tr>
              <td rowspan="<?php echo($m)?>"><?php echo($order->id_order)?></td>
              <?php foreach($a as $user){ 
                  if($user->id==$order->id_user){?>


              <td rowspan="<?php echo($m)?>"><?php echo($user->first_name)?> <?php echo($user->last_name)?></td>
              <?php } ?>
              <?php } ?>
              <td>Prod name</td>
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
                            <td>x<?php echo($qtes[$key])?></td>
                        
                    </tr>
                    
                                  
                                      <?php } ?>
              <?php } ?>
           
			<?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Name</label>
		        		<input type="text" name="product_name" class="form-control" placeholder="Enter Product Name">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Brand Name</label>
		        		<select class="form-control brand_list" name="brand_id">
		        			<option value="">Select Brand</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Category Name</label>
		        		<select class="form-control category_list" name="category_id">
		        			<option value="">Select Category</option>
		        		</select>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Description</label>
		        		<textarea class="form-control" name="product_desc" placeholder="Enter product desc"></textarea>
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Price</label>
		        		<input type="number" name="product_price" class="form-control" placeholder="Enter Product Price">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
		        		<input type="text" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Image <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div>
        		<input type="hidden" name="add_product" value="1">
        		<div class="col-12">
        			<button type="button" class="btn btn-primary add-product">Add Product</button>
        		</div>
        	</div>
        	
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<?php include "includes/footer.php"; ?>>



<script type="text/javascript" src="./js/customers.js"></script>