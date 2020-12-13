<?php
    include('./includes/connect.php');
    
?>


<!DOCTYPE html>
<html>

<head>
    <title>Phuong Store</title>
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
    .git{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
}
</style>

</head>

<body>
    <!--header-->
    <?php
        include './includes/header.php';
    ?>
    <h5 class="git">Link Github:&nbsp;&nbsp;&nbsp;   https://github.com/Phuong26071999/Thuchanh_Laptrinhweb.git</h5>
    <!--CONTENT-->
    <div class="container-fluid">
        <div class="shoes-grid">
        <div>
        <a href="single.php">
			<div class="wrap-in">
				<div class="wmuSlider example1 slide-grid">		 
				   <div class="wmuSliderWrapper" >		  
					   <article style="position: absolute; width: 100%; opacity: 0 ;">					
                            <div class="banner-matter banners">
                                <div class="col">
                                    <img class="img-responsive anh" src="images/layout/1.jpg" alt=""/>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                         </article>
                         <article style="position: absolute; width: 100%; opacity: 0;">					
                            <div class="banner-matter">
                                <div class="col">
                                    <img class="img-responsive anh" src="images/layout/4.jpg" alt=""/>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                         </article>
                         <article style="position: absolute; width: 100%; opacity: 0;">					
                            <div class="banner-matter">
                                <div class="col">
                                    <img class="img-responsive anh" src="images/layout/3.jpg" alt=""/>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
					 	</article>
					 	
						
					 </div>
					 </a>
	                <ul class="wmuSliderPagination">
	                	<li><a href="#" class="">0</a></li>
	                	<li><a href="#" class="">1</a></li>
	                	<li><a href="#" class="">2</a></li>
	                </ul>
					 <script src="js/jquery.wmuSlider.js"></script> 
				  <script>
	       			$('.example1').wmuSlider();         
	   		     </script> 
	            </div>
	          </div>
	        </a>
        </div>

    <!-- 2 sản phẩm random -->
    <div class="shoes-grid-left">
                <?php
                    $sql="select * from giay where maloai='L02'";
                    //$sql .= ' limit '.($trang-1)*$signature.','.$signature;
                    $stmt=$conn->prepare($sql);
                    $stmt->execute();
                    $i=0;
                    while($giay=$stmt->fetch(PDO::FETCH_ASSOC)){
                        if($i<2){
                ?>
        <a  href="single.php?magiay=<?php echo $giay['magiay']; ?>">
            <div class="col-md-5  link">
                <div class="elit-grid">

                    <h4><?php echo $giay['tengiay']; ?></h4>
                    
                    <!-- <label>FOR ALL PURCHASE VALUE</label> -->
                    <p><?php echo $giay['mota']; ?></p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="images/product/<?php echo explode(',',$giay['hinh'])[0]; ?>" alt=" " />

                
                
                    
            </div>
        </a>
        <?php 
                    }
                $i++; } 
            ?>
    </div>

    <!-- Sản phẩm -->

    <div class="products">
        <h5 class="latest-product">LATEST PRODUCTS</h5>
        <a class="view-all" href="product.php">VIEW ALL<span> </span></a>
    </div>
    
    <div class="row giay_row">
        <?php
        $para=array();
        $trang=1;
        if(isset($_GET['trang']))
            $trang = $_GET['trang'];
        if(isset($_GET['maloai'])){
            $sql="select * from giay where maloai=?";
            $para[]=$_GET['maloai'];
        }else
        $sql="select * from giay";
        $sql .= ' limit '.($trang-1)*$giay1trang.','.$giay1trang;
        $stmt=$conn->prepare($sql);
        $stmt->execute($para);
        while($giay=$stmt->fetch(PDO::FETCH_ASSOC)){
                
        ?>
            <div class="col-md-4 giay_col">
                <div class="card">
                    <a href="single.php?magiay=<?php echo $giay['magiay']; ?>"><img class="img-responsive chain giay_image" src="images/product/<?php echo explode(',',$giay['hinh'])[0]; ?>" alt=" " /></a>
                    <span class="star"> </span>
                    <div class="grid-chain-bottom">
                        <h6><a href="single.php?maxe=<?php echo $giay['magiay']; ?>"><?php echo $giay['tengiay']; ?></a></h6>
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

        <?php } ?>
    </div>

    <!-- Tinh tong so xe -->
    <?php
    if(isset($_GET['maloai']))
        $sql="select count(*) from giay where maloai=?";
    else
        $sql="select count(*) from giay";
    $stmt=$conn->prepare($sql);
    $stmt->execute($para);
    $tonggiay=$stmt->fetchColumn();
    
    $sotrang=ceil($tonggiay/$giay1trang);

    echo '<span style="font-size: 20px;">Trang: </span> ';
    if(isset($_GET['maloai']))
        for($i=1;$i<=$sotrang;$i++)
            echo '<a href="index.php?maloai='.$_GET['maloai'].'&trang='.$i.'" class="pages"> '.$i.' </a> ';

    else {
        for($i=1;$i<=$sotrang;$i++)
            echo '<a href="index.php?trang='.$i.'"class="pages"> '.$i.' </a> ';
    }
    ?>

        
    <?php
        
        
    ?>
    <div class="products">
        <h5 class="latest-product">Phụ kiện</h5>
        <a class="view-all" href="product.php?maloai='L03'">VIEW ALL<span> </span></a>
    </div>
    <div class="product-left">
        <?php
            $signature=3;
            $sql="select * from giay where maloai='L03'";
            //$sql .= ' limit '.($trang-1)*$signature.','.$signature;
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $i=0;
            while($giay=$stmt->fetch(PDO::FETCH_ASSOC)){
                if($i<3){
        ?>
        <div class="col-md-4 giay_col">
                <div class="card">
                    <a href="single.php?maxe=<?php echo $giay['magiay']; ?>"><img class="img-responsive chain moto_image" src="images/product/<?php echo explode(',',$giay['hinh'])[0]; ?>" alt=" " /></a>
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
            $i++; } 
        ?>

        <div class="clearfix"> </div>
    </div>
    
    <div class="clearfix"> </div>
    </div>
    
    <!-- CONTENT Left -->
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



<!-- zo trang home, xóa số lượng -> nhập bên cart ( cộng trừ).
Mỗi lần bấm order -> thông báo thêm vào cart -->