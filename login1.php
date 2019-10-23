<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 1</title>
    <link rel="stylesheet" href ="/assets/css/bootstrap.min.css">
</head>
<body>
    
    
<div>
<center>
<ul>
<br>
<br>
<br>
<form action="produk.php" method="post">
    <li> Email <input type="email" name="email" required></li>
    <br> <li> Password<input type ="password" name="pass" required></li>
    <br> <input type = "submit" value="login" name="akses">
    </form>
    </ul>
    </div>
    </center>
    <br> 
   <footer>
    
    <center>&copy; 2019 SMK Assalaam</center>

    </footer>
   
    <script src= "assets/js/jquery-3.4.1.min.js"></script>
    <script src= "assets/js/bootstrap.bundle.min.js"></script>
    <script src= "assets/js/bootstrap.bundle.js"></script>
    
    
</body>
</html>
<?php
if (isset($_POST['akses'])) {
    $a=$_POST['email'];
    $b=$_POST['pass'];

    if ($a == "admin@gmail.com" && $b == "12345678") {
        $_SESSION['akseslogin'] = 'admin';
        header("location:produk.php");
    }else {
        echo "login gagal";
    }
}elseif ($_SESSION['akseslogin']) {
    echo "<script>alert ('anda sudah login');" . 
    "window.location.href='produk.php'</script>";
}

?>