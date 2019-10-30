
  <!DOCTYPE html>
<head>
         
        <title>OOP in PHP</title>
  
</head>
<body>
  <form method="post" action="">
    
 
   
 
 
   <table align="center">
<tr>
    <td><input type="text" name="alas" size="20" placeholder="alas"></td> 
    <td><input type="text" name="tinggi" size="20" placeholder="tinggi"></td>
        <td><input type="submit" name="simpan" value="Hitung"></td>
        </tr>
    <tr>
        <td><input type="text" name="jari" size="20" placeholder="jari"></td>
            <td><input type="submit" name="simpan1" value="Hitung"></td>
    </tr>
<?php 
   
  
  
  class Segitiga {
    public $alas;
    public $tinggi;

    public function __construct($alas,$tinggi){
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }


    public function hitungLuas1(){
      return (0.5 * $this->alas * $this->tinggi);
    }
}
if (isset($_POST['simpan'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
}  
    $segitiga = new Segitiga($alas,$tinggi);
    echo "alas : $segitiga ->alas <br>";
    echo "tinggi : $segitiga ->tinggi <br>";
    echo 'Luas Segitiga : '.$segitiga->hitungLuas1() . "<br>";
  

  class Lingkaran {
    public $jarijari;

    public function __construct($jarijari){
      $this->jarijari = $jarijari;
    }
    
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }
  class Lingkaran2{
      public $jarijari;
     
      public function __construct($jarijari1) {
          $this->jarijari = $jarijari1;
      }
      public function hitungkeliling()
      {
          return (2 * 3.14 * $this->jarijari);
      }
  }

  if (isset($_POST['simpan1'])) {
      $jari= $_POST['jari'];
  }
    $lingkaran = new Lingkaran($jari);
    echo "jari - jari : $lingkaran ->alas <br>";
    echo "keliling lingkaran :" . $lingkaran ->hitungkeliling() . "<br>";
    echo 'Luas lingkaran : '.$lingkaran->hitungLuas() . "<br>";
  ?>
  </table>
</form>
</br>
 

  </center>
</body>
 
</html>