

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
if(isset($dat)){
	$recherche=$dat;
}
else{$recherche="";}

?>
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Products</li>
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
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">
				

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter by Price</h3>
						<div class="filtre" id="price-slider" ></div>
					</div>
					<!-- aside widget -->
					<!-- aside widget -->
					<div class="aside">
					
						<h3 class="aside-title">Filter by category</h3>
						<ul class="list-links">
						<?php  foreach($aa as $cat ){?>
							<li><input <?php if(isset($_SESSION['idcat'])){if($cat->id==$_SESSION['idcat']){echo('checked');unset($_SESSION['idcat']);} }?> type="checkbox" id="cat" class="filtre" value="<?php echo($cat->id)?>">  <?php echo($cat->name)?></li>
							
							
						<?php }?>
						</ul>
					</div>
					<!-- /aside widget -->

					


					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Filter by Brand</h3>
						<ul class="list-links">
						<?php 
						 foreach($dump as $brand ){
						
						 
							 ?>
						
							 

							<li><input type="checkbox" id="brand" class="filtre" value="<?php  echo($brand->brand_id)?>">  <?php  echo( $brand->brand_name)?></li>
							
						<?php } ?>
						</ul>
					</div>
					<!-- /aside widget -->

					

					
				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-md-9">
					

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row" id="reslt">
                      
							<!-- Product Single -->
							

							
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

			
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<?php
require("includes/Footer.php");
?>
<script>


$(document).ready(function(){
	filtredata();
	
function filtredata(){
	var action="data";
	
	var brand=getfiltre("brand");
	var cat=getfiltre("cat");
	var slider = document.getElementById('price-slider');
	var recherche=<?php echo json_encode($recherche);?>
	
    var minPrice = 0;
    var maxPrice = 5;
    slider.noUiSlider.on('update', function (values) {
    minPrice = values[0];
    maxPrice = values[1];
    minPrice = minPrice.substring(0, minPrice.length - 1);
    maxPrice= maxPrice.substring(0, maxPrice.length - 1);})
	
	console.log(brand);
	$.ajax({url:"<?php echo URLROOT ?>/filtreProd/ajax",
		method:"POST",
		data:{brand:brand,cat:cat,min:minPrice,max:maxPrice,recherche:recherche,action:action},
		success:function(data){
			console.log(data);
			$("#reslt").html(data);

		}


	});
	

	
}
function getfiltre(id){
	var filtre=[];
	$('#'+id+':checked').each(function(){
		filtre.push($(this).val());
	});
	return filtre;

	

}
$(".filtre").click(function(){
	filtredata();

});
})











</script>
</body>
</html>