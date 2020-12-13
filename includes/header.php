<?php
    include 'connect.php';
?>

<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="top-header-right">
                <ul class="footer_social-list">
                    <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/?lang=vi"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.google.com/"><i class="fab fa-google"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/?gl=VN"><i class="fab fa-youtube"></i></a></li>
                </ul>
                <!---->
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                    <a href="index.php" class="logo">
                        <div>   
                            <span class="logo_name">PHU<img class="logo_icon" src="https://svgsilh.com/svg/1139381.svg" alt="shoes">NG</span><br>
                            <span class="logo_sneakers">SNEAKERS </span>
                        </div>
                    </a>
                <div class="search">
                    <form action="search.php" method="GET" enctype="multipart/form-data">
                        <input type="text" name="search" value="<?php echo isset($_GET['search'])?$_GET['search']:'' ?>"
                            onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                        <input type="submit" name="submit" value="SEARCH">
                    </form>

                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">
                <!-- <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div> -->
                <ul class="login">
                    <li><a href="loginAdmin.php"><span> </span>LOGIN</a></li> |
                    <li ><a href="register.html">SIGNUP</a></li>
                </ul>
                <div class="cart"><a href="#"><span> </span>CART</a></div>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        
    </div>
</div>