<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
</head>
<body>

<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6" style="padding:20px;">
                <div class="card">
                    <div class="card-header">Raport</div>
                    <div class="card-body">
                        <form action="output.php" method="post">            
                            <?php
                            if (isset($_POST['simpan'])) {
                            $a = $_POST['jml'];
                            for ($i=0; $i < $a ; $i++) { 
                                
                            ?>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nilai Harian</label>
                                <input type="text" name="harian[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nilai UTS</label>
                                <input type="text" name="uts[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Nilai UAS</label>
                                <input type="text" name="uas[]" class="form-control" required>
                            </div>
                            <hr style="height:5px; background-color:#000;">
                            <?php }
                            } ?>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" name="sbm">
                                Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
                    
</html>
    
        

                                        
