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
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
    
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- end header -->

    <!-- content -->
    <div clas="container">
            <div class ="row justify-content-center">
                <div class="col-md-8" style="padding:20px;">
                <center><h1>Formulir</h1></center>


            <div class="card">
            <div class="card-header">
            <div class="card-body">
            <div class="form-group">
        Rapot
        </div>

      <form action="" method="POST">

     <div>
     <label for="">Nama</label>
     <input type="text" name="nama" class="form-control">      
     </div> <br>

     <div>
     <label for="" class="form-group">Kelas</label>                
     <input type="text" name="kls" class="form-control">
     </div> <br>
  
     <!-- <div>
     <label>Jenis kelamin</label>
     <input type="radio" name="Jenis_kelamin" value="laki-laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
     <input type="radio" name="Jenis_kelamin" value="perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
     </div> -->

    <!-- <div class="form-group">
    <label>Nilai UTS</label>
    <input type="number" class="form-control" name="UTS">
    </div>

    <div class="form-group">
    <label>Nilai UAS</label>
    <input type="number" name="uas" class="form-control">
    </div> -->

             <button type="submit" name="Simpan" class="btn btn-success">Simpan</button>
             <input class = "btn btn-danger" type = "reset" value = "Reset">


        </div>
      </div>
  </form>

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