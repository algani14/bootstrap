<?php 

  class Segitiga {
    var $alas;
    var $tinggi;

    public function __construct($alas,$tinggi){
      $this->alas = $alas;
      $this->tinggi = $tinggi;
    }

    public function hitungLuas(){
      return (0.5 * $this->alas * $this->tinggi);
    }
  }

  class Lingkaran {
    var $jarijari;

    public function __construct($jarijari){
      $this->jarijari = $jarijari;
    }
    
    public function hitungLuas(){
      return (3.14 * pow($this->jarijari,2));
    }
  }
  class Lingkaran2{
      var $jarijari;
     
      public function __construct($jarijari1) {
          $this->jarijari = $jarijari1;
      }
      public function hitungkeliling()
      {
          return (2 * 3.14 * $this->jarijari);
      }
  }



  $segitiga = new Segitiga(4,5);
  echo 'Luas Segitiga = '.$segitiga->hitungLuas() . "<br>";

  $lingkaran = new Lingkaran(10);
  echo 'Luas Lingkaran = '.$lingkaran->hitungLuas() . "<br>";

  $lingkaran1 = new Lingkaran2(10);
  echo 'Keliling Lingkaran ='.$lingkaran1->hitungkeliling();
?>
 
