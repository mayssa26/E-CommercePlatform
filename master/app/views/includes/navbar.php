 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">E SHOP</a>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['email'])) {
    			?>
    				<a class="nav-link" href="<?php echo URLROOT?>/users/logout">Log out</a>
    			
					<?php }else{$uri = $_SERVER['REQUEST_URI']; 
						if('http://localhost'.$uri==URLROOT.'/users/register'){ ?>
					
	    				<a class="nav-link" href="<?php echo URLROOT?>/users/login">Login</a>
						<?php }else{ ?>
							<a class="nav-link" href="<?php echo URLROOT?>/users/register">register</a>
	    		
	    				
						<?php }?>
						<?php }?>
	    			
      
    </li>
  </ul>
</nav>