<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

   
    <!-- Header -->
    
    

        
    <!-- End Header -->

    <!-- Content -->
     <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6" style="padding:20px;">
                <div class="card">
                <form action="produk.php" method="post">
                    <div class="card-header">Pembayaran</div>
                    <div class="card-body">
                        <form action="form2.php" method="post">
                            <div class="form-group">
                               <?php if (isset($_POST['in'])) {
                                   $total =$_POST['al'];
                                   $by=$_POST['byr'];
                                   $tot=$by-$total;
                               } ?>
                            
                            <div class="form-group">
                               <center> <label><h1><?php echo "total kembalian : Rp.$tot";?></h1></label></center>
                               <center>apakah anda ingin mengulang lagi<br>


                                <button class="btn btn-outline-danger my-2 my-sm-2" type="submit" name="in"><a href="produk.php"></a> Ya </button>
                                </form>
                    <div class="form-group">
                    <center><button class="btn btn-outline-danger my-2 my-sm-2" type="submit" name="tidak"><a href="home.php">tidak</button></a></center>
                    <?php if (isset($_POST['tidak'])) {
                        echo "terima kasih";
                    }?>
                                </center>
                            
                                
                            </div>
                    </div>
                </div>
                
                        </div>
                    </div>
                </div>
            </div>
        </div>