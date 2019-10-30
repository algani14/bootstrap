<?php 
   
  
  
  class Kelas{
    public $walikelas;
    public $namakm;
    public $sekertaris;
    public $bendahara;
    public $jumlah;



    public function __construct($a,$b,$c,$d,$e){
      $this->walikelas = $a;
      $this->namakm = $b;
      $this->sekertaris = $c;
      $this->bendahara = $d;
      $this->jumlah = $e;
    }


    public function wali(){
      return "nama walikelas =". $this->walikelas .  "<br>"
      . "nama km =" . $this->namakm .  "<br>" . 
      "nama sekertaris =" . $this->sekertaris .  "<br>" .
       "nama bendahara =" . $this->bendahara .  "<br>" .
       "jumlah siswa ="  . $this->jumlah ;
    }
}
if (isset($_POST['simpan'])) {
    $wali = $_POST['nama'];
    $km = $_POST['km'];
    $seker=$_POST['seker'];
    $benda=$_POST['benda'];
    $jm=$_POST['jm'];
}  
    $al = new Kelas($wali,$km,$seker,$benda,$jm);
    echo $al->wali() . "<br>";
  
  ?>