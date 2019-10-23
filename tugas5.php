<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 1</title>
    <link rel="stylesheet" href ="/assets/css/bootstrap.min.css">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMK Assalaam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">produk <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>
    <!-- end header -->

    <!-- content -->
    <div clas="container">
            <div class ="row justify-content-center">
                <div class="col-md-8" style="padding:20px;">
                    <div class="card">
                        <form action="produk.php" method="post">
                            <div class="card-hearder">pembayaran</div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <?php if (isset($_POST['in'])) {
                                        $total =$_POST['al'];
                                        $by=$_POST['byr'];
                                        $tot=$by-$total;
                                        } ?>
                
                
                
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