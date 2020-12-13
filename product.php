<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Product :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/my.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/offcanvas/offcanvas.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<script src="js/jquery.min.js"></script>



<style>
	.rsidebar{
		margin-left: 12px;
	}
	.all-product{
		margin-left: 30px;
	}

</style>


</head>

<body>
	<!--HEADER-->
	<?php
        include './includes/header.php';
    ?>

	<!--CONTENT-->

	<!-- start content -->
	<div class="content">

		<div class="women-product">
			<div class=" w_content">
				<div class="women">
					<a href="#">
						<h4>Enthecwear - <span>4449 itemms</span> </h4>
					</a>
					<ul class="w_nav">
						<li>Sort : </li>
						<li><a class="active" href="#">popular</a></li> |
						<li><a href="#">new </a></li> |
						<li><a href="#">discount</a></li> |
						<li><a href="#">price: Low High </a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- grids_of_4 -->
		<div class="grid-product">
			<div class="all-product">
					<?php
					
					$sql = "select * from giay";
					//$sql .= ' limit '.($trang-1)*$signature.','.$signature;
					$stmt = $conn->prepare($sql);
					$stmt->execute();
					
					while ($giay = $stmt->fetch(PDO::FETCH_ASSOC)) {
						
					?>
							<div class="col-md-4 giay_col">
								<div class="card">
									<a href="single.php?maxe=<?php echo $giay['magiay']; ?>"><img class="img-responsive chain moto_image" src="images/product/<?php echo explode(',', $giay['hinh'])[0]; ?>" alt=" " /></a>
									<span class="star"> </span>
									<div class="grid-chain-bottom">
										<h6><a href="single.php?magiay=<?php echo $giay['magiay']; ?>"><?php echo $giay['tengiay']; ?></a></h6>
										<div class="star-price">
											<div class="dolor-grid">
												<span class="actual"><?php echo number_format($giay['gia']); ?> VND</span>
												<!-- <span class="reducedfrom">400$</span> -->
												<span class="rating">
													<input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
													<label for="rating-input-1-5" class="rating-star1"> </label>
													<input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
													<label for="rating-input-1-4" class="rating-star1"> </label>
													<input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
													<label for="rating-input-1-3" class="rating-star"> </label>
													<input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
													<label for="rating-input-1-2" class="rating-star"> </label>
													<input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
													<label for="rating-input-1-1" class="rating-star"> </label>
												</span>
											</div>
											<a class="now-get get-cart" href="#">ADD TO CART</a>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
							</div>
					<?php
						
					}
					?>

					
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<!-- Menu Left -->
	<div class="sub-cate">
		<?php
        include './includes/menuleft.php'
        ?>

		
	</div>
	<div class="clearfix"> </div>
	</div>

	<!--FOOTER-->
	<?php
        include './includes/footer.php';
    ?>

</body>

</html>