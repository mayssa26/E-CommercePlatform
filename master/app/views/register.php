<?php 


include "includes/top.php"; 

?>
 
<?php include "includes/navbar.php"; ?>
<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Admin Register</h4>
			<p class="message"></p>
			<form id="admin-register-form" action= "<?php echo URLROOT ?>/users/register"  method="POST">
			  <div class="form-group">
			    <label for="name">Name</label>
			    <input type="text" class="form-control" name="adminname" id="name" placeholder="Enter Name">
			  </div>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="mdp" id="password" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="cpassword">Confirm Password</label>
			    <input type="password" class="form-control" name="mdp2" id="cpassword" placeholder="Password">
			  </div>
			  <input type="hidden" name="admin_register" value="1">
			  <button type="submit" class="btn btn-primary register-btn">Register</button>
			</form>
		</div>
	</div>
</div>



<?php include "includes/footer.php"; ?>

<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/admin.js"></script>