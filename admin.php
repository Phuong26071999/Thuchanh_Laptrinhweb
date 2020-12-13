<?php
    include('./includes/head.php');
    include('./includes/connect.php');
    $stm = $conn -> query('select * from loai');
    $loaigiay = $stm->fetchAll(PDO::FETCH_ASSOC);
    session_start();
    
?>

<title>Document</title>
    <style>
        .cover_create{
        height: auto;
        width: 1100px;
        background: #e6dede;
        box-shadow: 5px 5px 5px #cccccc;
        margin-left: 80px;
        margin-top: 40px;

    }
    .cover_content{
        margin: 20px;

    }
    .form_title{
        margin-bottom: 30px;
    }
    .form_bodyleft{
        margin-left: 50px;
    }
    .form_bodyleft img{
        width: 400px;
        height: 330px;
    }
    .form_title p, .form_bodyright p{
        font-size: 23px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        margin-bottom: -2px;
    }
    .form_bodyright input[type="text"]{
        width: 521px;
        height: 40px;
        border: none;
        outline: none;
        color: #000000;
    }
    .form_title input[type="text"]{
        border: none;
        outline: none;
        width: 600px;
        height: 40px;
        color: #000000; 
    }
    input[type="file"]{
        padding-top: 20px;
    }
    .form_bodyleft ,.form_bodyright{
        padding-top: 20px;
    }
    .drink_item{
        padding-bottom: 40px;
        padding-top: 20px;
    }
    .complete, .add{
        float: right;
    }
    .btn-primary, .btn-success{
        margin: 0 -60px 10px 70px;
    }
    .btn-danger{
        float: right;
        margin-top: -45px;
    }
    textarea{
        border: none;
        outline: none;
        margin-bottom: 10px;
    }
    .logo_icon{
        width: 100px;
        height: 80px;

        padding-bottom: 2px;
        margin-bottom: 5px;
        background-color: crimson;
        border-radius: 50%;
        box-shadow: 2px 2px 5px #000000;
    }
    .username{
        font-size: 20px;
        font-family: 'FS Core Magic Rough';
        font-weight: bold;
        color: red;
    }
    </style>
</head>
<body>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar-btn"></i>
        </label>
        <div class="left-header">
            <h3>Phuong<span> sneaker</span></h3>
        </div>
        <div class="right-header">
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
        
    </header>
    <div class="sidebar">
        <center>
            <img class="logo_icon" src="https://svgsilh.com/svg/1139381.svg" salt="shoes">
            <div class="username">
                <?php
                    $username = $_SESSION['username']; 
                    echo $username;
                    //var_dump($_SESSION['username']);
                ?>
            </div>
        </center>
        <a href="#"><i class="fas fa-desktop"></i><span>Statistical</span></a>
    
        <div class="dropdown">  
            <button class="dropdown-btn">
                <i class="fas fa-th"></i>
                Quản lí
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="#">Quản lí loại </a>
                <a href="#">Quản lí thông tin</a>
            </div>
        </div>
        <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
    </div>

    <div class="content">
    <br>
        <section class="drink-form">
                <form action="admin.php" method="POST" enctype="multipart/form-data">
                    <!-- Tên loại -->
                    <div class="container">
                        <div class="cover_create">
                            <div class="cover_content">
                                <div class="drink_item">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form_bodyleft">
                                                <img src="./images/layout/nike.jpg" alt="giay">
                                                <input type="file" name="hinh" value="">
                                                <h3>Loai</h3> <select name="maloai" id="">
                                                <?php 
                                                
                                                foreach ($loaigiay as $key => $value) 
                                                { ?>
                                                    <option value="<?php echo isset($_POST['maloai'])?$value['maloai']:$value['maloai'] ?>">
                                                        <?php echo isset($_POST['tenloai'])?$value['tenloai']:$value['tenloai'] ?>
                                                    </option>
                                                    <?php
                                                }?>
                                                </select>
                                             </div>
                                        </div> 
                                        <div class="col">
                                            <div class="form_bodyright">
                                                <p>Mã giày</p>
                                                <input type="text" placeholder="Nhập mã giày" name="txtMa">
                                                <p>Tên giày</p>
                                                <input type="text" placeholder="Nhập tên giày" name="txtName">
                                                <p>giá</p>
                                                <input type="text" placeholder="Nhập giá giày" name="txtCost">
                                                <p>Mô tả</p>
                                                <textarea name="txtDetail" id="detail" cols="70" rows="8" placeholder="Nhập mô tả giày"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-danger" type="button" id="xoa_mon">Delete</button>
                            </div>
                        </div>
                    </div>
                    <button class="complete btn btn-success" name="submit" type="submit">Complete</button>
                    <button class="complete btn btn-primary" type="button" onclick="addItem()">add</button>
            </form>
            

            
<?php


  if(isset($_POST["submit"])) {
    function postIndex($i, $v=''){
    return isset($_POST[$i])?$_POST[$i]:$v;
  }
  }


  // file upload.php xử lý upload file

  if ($_SERVER['REQUEST_METHOD'] !== 'POST')
  {
      // Dữ liệu gửi lên server không bằng phương thức post
      echo "Phải Post dữ liệu";
      die;
  }

  // Kiểm tra có dữ liệu fileupload trong $_FILES không
  // Nếu không có thì dừng
  if (!isset($_FILES["hinh"]))
  {
      echo "Dữ liệu không đúng cấu trúc";
      die;
  }

  // Kiểm tra dữ liệu có bị lỗi không
  if ($_FILES["hinh"]['error'] != 0)
  {
    echo "Dữ liệu upload bị lỗi <a href=".'index.php'.">Tiếp tục</a>";
    die;
  } 

  
  $hinh = isset($_FILES['hinh']['error'])?$_FILES['hinh']['name']:'';
  $arr = [
    postIndex('txtMa'),
    postIndex('txtName'),	//tensach
    postIndex('txtDetail'),
    postIndex('txtCost'), //gia
    $hinh,
    postIndex('maloai'),//maloai
    ];

  // Đã có dữ liệu upload, thực hiện xử lý file upload

  //Thư mục bạn sẽ lưu file upload
  $target_dir    = "images/product/";
  
  //Vị trí file lưu tạm trong server (file sẽ lưu trong uploads, với tên giống tên ban đầu)
  $target_file   = $target_dir . basename($_FILES["hinh"]["name"]);

  $allowUpload   = true;

  //Lấy phần mở rộng của file (jpg, png, ...)
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

  // Cỡ lớn nhất được upload (bytes)
  $maxfilesize   = 100000;

  ////Những loại file được phép upload
  $allowtypes    = array('jpg', 'png', 'jpeg', 'gif');


  if(isset($_POST["submitAdd"])) {
      //Kiểm tra xem có phải là ảnh bằng hàm getimagesize
      $check = getimagesize($_FILES["hinh"]["tmp_name"]);
      if($check !== false)
      {
          echo "Đây là file ảnh - " . $check["mime"] . ".";
          $allowUpload = true;
      }
      else
      {
          echo "Không phải file ảnh.";
          $allowUpload = false;
      }
  }

  // Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
  // Bạn có thể phát triển code để lưu thành một tên file khác
  if (file_exists($target_file))
  {
      echo "Tên file đã tồn tại trên server, không được ghi đè";
      $allowUpload = false;
  }
  // Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
  if ($_FILES["hinh"]["size"] > $maxfilesize)
  {
      echo "Không được upload ảnh lớn hơn $maxfilesize (bytes).";
      $allowUpload = false;
  }

  // Kiểm tra kiểu file
  if (!in_array($imageFileType,$allowtypes ))
  {
      echo "Chỉ được upload các định dạng JPG, PNG, JPEG, GIF";
      $allowUpload = false;
  }

  if ($allowUpload)
  {
      // Xử lý di chuyển file tạm ra thư mục cần lưu trữ, dùng hàm move_uploaded_file
      if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file))
      {
        $sql="INSERT INTO giay (magiay, tengiay, mota, gia,  hinh, maloai)  
                    VALUES (?,       ?,      ?,    ?,     ?,    ?)";
          $stm= $conn->prepare($sql);
          $stm->execute($arr);
          
          echo "<br>File ". basename( $_FILES["hinh"]["name"]).
          " Đã upload thành công.<br>";
          echo "File lưu tại " . $target_file; 
      }
      else
      {
          echo "Có lỗi xảy ra khi upload file.";
      }
  }
  else
  {
      echo "Không upload được file, có thể do file lớn, kiểu file không đúng ...";
  }
  //header('location:index.php');

?>

<p>
<a href="admin.php">Tiếp tục</a>
</p>



        </section>
    </div>



    <?php
        include('./script.php');
    ?>
   
</body>
</html>