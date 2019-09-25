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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">SMK ASSALAAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Raport Siswa</a>
                </li>
            </ul>
    </div>
</nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6" style="padding:20px;">
                <div class="card">
                    <div class="card-header">Raport</div>
                    <div class="card-body">
                        <form action="form2.php" method="post">
                            <div class="form-group">
                                <label for="">Masukan Siswa</label>
                                <input type="text" name="jml" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" name="simpan">
                                Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>