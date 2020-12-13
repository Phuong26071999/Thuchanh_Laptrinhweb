<?php
    include 'connect.php';
?>


<div class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="latter">
                <h6>NEWS-LETTER</h6>
                <div class="sub-left-right">
                    <form>
                        <input type="text" value="Enter email here" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                        <input type="submit" value="SUBSCRIBE" />
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="latter-right">
                <p>FOLLOW US</p>
                <ul class="face-in-to">
                    <li><a href="https://twitter.com/?lang=vi"><span> </span></a></li>
                    <li><a href="https://www.facebook.com/"><span class="facebook-in"> </span></a></li>
                    <div class="clearfix"> </div>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-cate">
                <h6>ABOUT</h6>
                <ul>
                    <li><a href="#">founder</a></li>
                    <li><a href="#">conceit</a></li>
                    <li><a href="#">personnel</a></li>
                    <li><a href="#">designer</a></li>
                    <li><a href="#">partner</a></li>

                </ul>
            </div>
            <div class="footer-bottom-cate bottom-grid-cat">
                <h6>AGENCY</h6>
                <ul>
                    <li><a href="#">1. 41 Đặng Thị Nhu, Quận 1</a></li>
                    <li><a href="#">2. 87 Nguyễn Trãi, Quận 1</a></li>
                    <li><a href="#">3. 33 Hoa Hồng, Quận Phú Nhuận</a></li>
                    <li><a href="#">4. 75/1 Mai Thị Lựu, P. Đa Kao, Q.1</a></li>
                    <li><a href="#">5. 386/4 Lê Văn Sỹ, Quận 3</a></li>

                </ul>
            </div>
            <div class="footer-bottom-cate">
                <h6>TOP BRANDS</h6>
                <ul>
                    <li>
                        <a href="#">
                            <?php
                                $sql='SELECT * FROM loai';
                                $stmt = $conn->prepare($sql);
                                $stmt->execute();
                                while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                    echo '<li><a href="index.php?maloai='.$row['maloai'].'">'.$row['tenloai'].'</a></li>';
                                }
                            ?>
                        </a>

                    </li>
                </ul>
            </div>
            <div class="footer-bottom-cate cate-bottom">
                <h6>CONTACT</h6>
                <ul>
                    <li class="phone">PH : 6985792466</li>
                    <li class="phone">FAX : 19008079</li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>