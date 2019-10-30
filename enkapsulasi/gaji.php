<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>latihan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
 <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6" style="padding:20px;">
                <div class="card">
                    <div class="card-header">XI RPL 2</div>
                    <div class="card-body">
                    <form action="gaji1.php" method="POST">
                    <div class="form-group">
                        <label for="">Nama </label>
                            <input type="text" name="nama" class="form-control">      
                    </div> <br>
                    <div class="form-group">
                        <label for="" class="form-group">NIP</label>                
                            <input type="text" name="nip" class="form-control">
                    </div> <br>

                    <div class="form-group">
                        <label>Alamat</label>
                            <textarea name="al" id="" cols="60" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Jumlah Hari Kerja</label>
                            <input type="number" class="form-control" name="jumker" max=30>
                    </div>

                    
                    <form class="form-inline my-2 my-lg-0">
      
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="simpan">Simpan</button>
                </form>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</body>
</html>