<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body>

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
    <center>
        <h2> Data Barang</h2>
    </center>
 
       
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Data barang</div>
                    <div class="card-body">
                        <form action="output2.php" method="post">
                        <?php
                        if (isset($_POST['simpen'])) {
                        $jml = $_POST['jumlah_buku'];
                        $nama = $_POST['nama'];
                        $alamat = $_POST['almt'];
                        $kelamin = $_POST['jk'];
                        $tanggal = $_POST['tgl'];
                        for ($i=0; $i < $jml ; $i++) {
                        

                        ?>      
                            <div class="form-group">
                                <label for="">Nama</label>
                                    <input type="text" name="nama1[]" class="form-control">      
                            </div> <br>

                            <div class="form-group">
                                <label for="" class="form-group">Kode</label>                
                                    <input type="number" name="kode[]" class="form-control">
                            </div> <br>
                    
                            <div class="form-group">
                                <label>Jenis Barang</label><br>
                                <select name="jenis[]">
                                <option name="j1" value="Makanan">Makanan</option>
                                <option name="j2" value="Minuman">Minuman</option>
                                <option name="j3" value="Transportasi">Tranportasi</option>
                                <option name="j4" value="Hewan">Hewan</option>
                                <option name="j2" value="Sendal">Sendal</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Harga</label>
                                    <input type="number" class="form-control" name="harga[]">
                            </div>

                            <div class="form-group">
                                <label>Jumlah </label>
                                    <input type="number" name="jm[]" class="form-control">
                            </div>
                            <hr style="height:5px; background-color:#000;">
                            <?php }
                            } ?> 
                            
                            
                                <input type="hidden" name="nama" value= "<?php echo $nama ?>" >
                                <input type="hidden" name="almt" value="<?php echo $alamat ?>" >
                                <input type="hidden" name="jk" value="<?php echo $kelamin ?>" >
                                <input type="hidden" name="tgl" value="<?php echo $tanggal?>" > 
                                <input type="hidden" name="jumlah_buku" value="<?php echo $jml?>" >
                            
                            
                            
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
            
            
            


                    
                


    
</body>
</html>
