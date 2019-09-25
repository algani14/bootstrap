<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
</head>
<body>

<h3>silahkan login hela</h3><BR>
<form action="" method="post">
    Email <input type="email" name="email" required>
    <br> Password<input type ="password" name="pass" required>
    <br> <input type = "submit" value="login" name="akses">
    </form>
</body>
</html> 
<?php
if (isset($_POST['akses'])) {
    $a=$_POST['email'];
    $b=$_POST['pass'];

    if ($a == "admin@gmail.com" && $b == "123456") {
        $_SESSION['akseslogin'] = 'admin';
        header("location:tugasrapot.php");
    }else {
        echo "login gagal";
    }
}elseif ($_SESSION['akseslogin']) {
    echo "<script>alert ('anda sudah login');" . 
    "window.location.href='tugasrapot.php'</script>";
}

?>