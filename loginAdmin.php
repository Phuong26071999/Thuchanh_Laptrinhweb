<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/loginAdmin.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="login-box">
        <h1>LOGIN</h1>
        <form action="loginAdmin.php" class="formAdmin-login" method="POST" enctype="application/x-www-form-urlencoded">
            <p>User name</p>
            <input id="username" name="txtUsername" class="username" type="text" placeholder="Enter Username">
            <p>Password</p>
            <input id="password" name="txtPassword" class="password" type="password" placeholder="Enter Password">
            <input type="submit" name="submitDNhap" value="Login">
        </form>
    </div>

<?php
    if (isset($_POST['submitDNhap'])) 
    {
        include './includes/connect.php';
         
        //Lấy dữ liệu nhập vào
        $username = isset($_POST['txtUsername'])?$_POST['txtUsername']:'';
        $password = isset($_POST['txtPassword'])?$_POST['txtPassword']:'';
        $para=array();
        $para[]=$username;

        //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
        if (!$username || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
         
        // mã hóa pasword
        $password = md5($password);
         
        //Kiểm tra tên đăng nhập có tồn tại không
        //$query = mysql_query("SELECT * FROM quantri WHERE username='$username'");
        $sql="select * from quantri where username='$username'";
        $stmt=$conn->prepare($sql);
        $stmt->execute($para);
        $ad=$stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($ad);
        
        
        if ($username != $ad['username']) {
            echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
         
        //Lấy mật khẩu trong database ra
        //$row = mysql_fetch_array($query);
         
        //So sánh 2 mật khẩu có trùng khớp hay không
        if ($password != $ad['matkhau']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
         
        //Lưu tên đăng nhập
        $_SESSION['username'] = $username;
        echo '<script language="javascript">'; 
		echo 'alert("Đăng Nhập Thành Công !!! ")'; 
        echo '</script>';
        
        echo '<script type="text/javascript">window.location = "admin.php"</script>';
        //echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='#'>Về trang chủ</a>";
        header("location: admin.php");
        die();
    }
?>


</body>

</html>