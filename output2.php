<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
    <style>
        font-family: 'Chilanka',
        cursive;
    </style>
    <title>Detail Pembelian</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Al</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
        </div>
    </nav>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                <form action="bayar.php" method="post">
                    <div class="card-header">Masukan Data Pembeli</div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['simpan'])) {
                            /* Data 1 */
                            $jumlah = $_POST['jumlah_buku'];
                            $nama = $_POST['nama'];
                            $alamat = $_POST['almt'];
                            $kelamin = $_POST['jk'];
                            $tanggal = $_POST['tgl'];
                            /* Data 2 */
                            $barang = $_POST['nama1'];
                            $kode = $_POST['kode'];
                            $pengarang = $_POST['jenis'];
                            $jenis = $_POST['harga'];
                            $jmlh = $_POST['jm'];
                        } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah Barang Yang Di Beli</th>
                                    <th colspan="2">Tanggal Pembelian</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $alamat ?></td>
                                    <td><?php echo $kelamin ?></td>
                                    <td><?php echo $jumlah ?></td>
                                    <td colspan="3"><?php $originalDate = $tanggal;
                                                    echo $newDate = date("d M Y", strtotime($originalDate)); ?></td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="center"><b>Daftar Barang Yang dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga (Rp)</th>
                                    <th>Jumlah barang</th>
                                    <th>total harga</th>
                                    
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($kode as $a => $b) { 
                                    
                                    $akhir=$jenis[$a]*$jmlh[$a];
                                    ?>
                                    <tr>
                                        <td><?php echo $barang[$a]; ?></td>
                                        <td><?php echo $kode[$a]; ?></td>
                                        <td><?php
                                             
                                             echo " $pengarang[$a] <br>";
                                             if (isset($_POST['j1'])) {
                                             echo "> " . $_POST['j1'] . "<br>";
                                             }
                                             if (isset($_POST['j2'])) {
                                             echo "> " . $_POST['j2'] . "<br>";
                                             }
                                             if (isset($_POST['j3'])) {
                                             echo "> " . $_POST['j3'] . "<br>";
                                             }
                                             if (isset($_POST['j4'])) {
                                             echo "> " . $_POST['j4'] . "<br>";
                                             }
                                             if (isset($_POST['j5'])) {
                                             echo "> " . $_POST['j5'] . "<br>";
                                             
                                             }
                                             ?>
                                        <td><?php echo $jenis[$a]; ?></td>
                                        <td><?php echo $jmlh[$a]; ?></td>
                                        <td><?php echo number_format($akhir, 2, ',', '.') ?></td>
                                        <?php $sub_total = $sub_total + $akhir; ?>
                                    </tr>
                                <?php
                                }
                                if ($sub_total >= 150000) {
                                    $diskon = ($sub_total * 5/100);
                                    /* var_dump($diskon); */
                                    $desc = 5;
                                } elseif ($sub_total >= 250000) {
                                    $diskon = ($sub_total * 10/100);
                                    $desc = 10;
                                    /* var_dump($diskon); */
                                } elseif ($sub_total >= 350000) {
                                    $diskon = ($sub_total * 20/100);
                                    $desc = 20;
                                    /* var_dump($diskon); */
                                }else {
                                    $diskon = 0;
                                    $desc = 0;
                                    /* var_dump($diskon); */
                                }
                                $total = $sub_total - $diskon;
                                ?>
                                <tr>
                                    <td colspan="6" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($sub_total, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon (<?php echo "$desc%"; ?>)</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($diskon , 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td colspan="5" align="right">Rp. <?php echo number_format($total, 2, ',', '.') ?></td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="center"><b>Pembayaran</b></td>
                                </tr>
                                
                            </table>
                            <div class="form-group">
                                    <input type="hidden" name="al" value="<?php echo $total; ?>">
                                    <label>Masukan Jumlah Uang </label><br>
                                    <input type="number" name="byr" min="<?php echo $total;?>"> <br>
                                    <button class="btn btn-outline-primary my-8 my-sm-2" type="submit" name="in">Bayar</button>
                                    </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>