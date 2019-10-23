<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 1</title>
    <link rel="stylesheet" href ="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">AL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    
    <!-- end header -->

    <!-- content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-header">login</div>
                    <div class="card-body">
                        <form action="home2.php" method="post">
    
                            <div class="form-group">
                                <label for="">email</label>
                                    <input type="email" name="email" class="form-control">      
                            </div> <br>

                            <div class="form-group">
                                <label for="" class="form-group">Password</label>                
                                    <input type="password" name="pass" class="form-control">
                            </div> 

                            <div class="form-group">
                                <button type="submit" name="simpen" class="btn btn-outline-primary btn-block" >login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- footer -->
    <footer>
    
    <center>&copy; 2019 SMK Assalaam</center>

    </footer>
    <!-- end footer -->

    <!-- js -->
    <script src= "assets/js/jquery-3.4.1.min.js"></script>
    <script src= "assets/js/bootstrap.bundle.min.js"></script>
    <script src= "assets/js/bootstrap.bundle.js"></script>
    <!-- end js -->
    
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