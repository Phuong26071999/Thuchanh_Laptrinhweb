<?php
    include('./includes/connect.php');
    
    
?>

<!--A Design by W3layouts 
    Author: W3layout
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
    -->
<!DOCTYPE html>
<html>

<head>
    <title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
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


</head>

<body>
    <!--header-->
    <?php
        include './includes/header.php';
    ?>

    <!--CONTENT-->
    <div class="container-fluid">
        <div class="shoes-grid">
            <a href="index.php?maloai=06">
                <div class="wrap-in">
                    <div class="wmuSlider example1 slide-grid">
                        
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
    <!-- </a> -->


    <!-- Sản phẩm -->
    <?php
        $paraTim=array();
        $trang=1;
        $search=isset($_GET['search'])?$_GET['search']:'';
        //echo '<pre>';
        $search= addslashes($search);
        //echo "</pre>";exit;
        /* $string = '`~!@#$%^&^&*()_+{}[]|\/;:"< >,.?-'."'"; */
        //$search= preg_replace('/[^a-zA-Z0-9_ \'-%][().][\/]/s', '', $search);
        if($search == ''){
            echo '<script language="javascript">'; 
		    echo 'alert("Không được để trống ")'; 
            echo '</script>';
        }else{
            if(isset($_GET['submit'])){
                $sql="SELECT * FROM giay WHERE tengiay LIKE '%$search%'";
                $paraTim[]=$search;
                $stmt=$conn->prepare($sql);
                $stmt->execute($paraTim);
                $giay=$stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        /* $sl="SELECT count(*) FROM giay";
        $stmt=$conn->prepare($sl);
         */
        $sl = "select count(*) from giay where tengiay LIKE '%$search%'";
        $stmt=$conn->prepare($sl);
        $stmt->execute();
        $soluong=$stmt->fetchColumn();
    ?>
    <div class="products">
        <h5 class="latest-product">KẾT QUẢ TÌM: <?php echo  stripslashes($search); ?></h5><h5 class="latest-product">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SỐ LƯỢNG SẢN PHẨM TÌM THẤY: <?php echo $soluong; ?></h5>
    </div>

    <div class="row giay_row">
        <?php
        if(isset($_GET['submit'])){
            foreach ($giay as $key => $value){  

        ?>
        <div class="col-md-4 giay_col">
            <div class="card">
                <a href="single.php?magiay=<?php echo $value['magiay']; ?>"><img class="img-responsive chain giay_image"
                        src="images/product/<?php echo explode(',',$value['hinh'])[0]; ?>" alt=" " /></a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a href="single.php?magiay=<?php echo $value['magiay']; ?>"><?php echo stripslashes($value['tengiay']); ?></a></h6>
                    <div class="star-price">
                        <div class="dolor-grid">
                            <span class="actual"><?php echo number_format($value['gia']); ?> VND</span>
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
        <?php } 
        }
        ?>
    </div>

    
    <div class="products">
        <h5 class="latest-product">Phụ kiện</h5>
        <a class="view-all" href="index.php?maloai='L03'">VIEW ALL<span> </span></a>
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
                    <a href="single.php?magiay=<?php echo $giay['magiay']; ?>"><img class="img-responsive chain moto_image" src="images/product/<?php echo explode(',',$giay['hinh'])[0]; ?>" alt=" " /></a>
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