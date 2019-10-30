




<?php 
   
  
  
  class Gaji{
    public $nama;
    public $nik;
    public $alamat;
    public $umur;
    



    public function __construct($a,$b,$c,$d,$e){
      $this->nama = $a;
      $this->nik = $b;
      $this->alamat = $c;
      $this->umur = $d;
    }    
    public function datadiri()
    {
        for ($i=0; $i < count($this->nama) ; $i++) { 
            echo "Nama : ". $this->nama[$i]. "<br>";
            echo "Nik : ". $this->nik[$i]. "<br>";
            echo "alamat : ". $this->alamat[$i]. "<br>";
            echo "umur : ". $this->umur[$i]. "<br>";
            echo "<hr>";
        }
    }


    
}




if (isset($_POST['simpan'])) {
    $wali = $_POST['nama'];
    $km = $_POST['nik'];
    $seker=$_POST['alamat'];
    $benda=$_POST['umur'];
    
}  
    $al = new Gaji($wali,$km,$seker,$benda,$jm);
    echo $al->datadiri() . "<br>";

   
  
  ?>