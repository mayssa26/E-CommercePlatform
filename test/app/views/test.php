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



    <form action="<?php echo URLROOT ?>/pages/test2" method="POST">
	<div class="aside">
						<h3 class="aside-title">Filter by Price</h3>
						<div id="price-slider"></div>
					</div>


                    <label for="amount" id="Price">Price Range</label><br>
  <input type="text" id="amount">
</p>
<div id="slider-range"></div>
                    <button type="submit"> aa </button>
    </form>
	



	<?php
require("includes/Footer.php");
?>
</body>
</html>