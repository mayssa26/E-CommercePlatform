<?php 


include "includes/top.php"; 

?>

<?php include "includes/navbar.php";?>

 

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Admin Login</h4>
			<p class="message"></p>
			<form id="admin-login-form"  action= "<?php echo URLROOT ?>/users/login"  method="POST">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <?php echo($data['usernameError']) ?>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="mdp" id="password" placeholder="Password">
			  </div>
			  <div class="form-text text-muted"> <?php  echo($data['passwordError']) ?> </div> 
			  <input type="hidden" name="admin_login" value="1">
			  <button type="submit" class="btn btn-primary login-btn">Submit</button>
			</form>
		</div>
	</div>
</div>


<?php include "includes/footer.php"; ?>

<script type="text/javascript" src="<?php echo URLROOT ?>/public/js/admin.js"></script>
