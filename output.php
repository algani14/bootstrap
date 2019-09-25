<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<div class="col-md-12" style="padding:20px;">
                <center><h2><u>Output</u></h2></center>
                             
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nilai Harian</th>
                            <th>Nilai UTS</th>
                            <th>Nilai Uas</th>
                            <th>Nilai Akhir</th>
                            <th>Status</th>
                        </tr>
                        <?php
                    if (isset($_POST['sbm'])) {
                        $nama = $_POST['nama'];
                        $kelas = $_POST['kelas'];
                        $harian = $_POST['harian'];
                        $uts = $_POST['uts'];
                        $uas = $_POST['uas'];
                    }
                    ?>
                    <?php foreach ($nama as $key => $value) { 

                    }
                    ?>
                        <tr>
                            <th><?php echo $nama[$key]; ?></th>
                            <th><?php echo $kelas[$key]; ?></th>
                            <th><?php echo $harian[$key]; $harian1 = $harian[$key] * (60/100); ?></th>
                            <th><?php echo $uts[$key]; $uts1 = $uts[$key] * (20/100); ?></th>
                            <th><?php echo $uas[$key]; $uas1 = $uas[$key] * (20/100); ?></th>
                            <th><?php echo $harian1+$uts1+$uas1; ?></th>
                            <th><?php echo $akhir; ?></th>
                            <td><?php 
                                if($na > 75) {
                                    echo "<strong>LULUS</strong>";
                                }else{
                                    echo "<strong>TIDAK LULUS</strong>";
                                }
                            ?></td>
                        </tr>
                        
                
    
    </div>
</div>
</body>
</html>





