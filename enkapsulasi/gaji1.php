<?php 
   
  
  
  class Gaji{
    public $nama;
    public $nip;
    public $alamat;
    public $jumlah_hari_kerja;
    



    public function __construct($a,$b,$c,$d,$e){
      $this->nama = $a;
      $this->nip = $b;
      $this->alamat = $c;
      $this->jumlah_hari_kerja = $d;
    }    
    public function gaji_kotor()
    {
        $kotor = $this->jumlah_hari_kerja * 75000;
        return "Gaji kotor : $kotor<br>";
    }
    public function gaji_bersih()
    {

        $kotor= $this->jumlah_hari_kerja*75000;
        $bersih=$kotor * 0.025;
        $br = ($kotor - $bersih);
        return "Gaji bersih : $br<br>";

       
        
    


    }


    public function wali(){
      return "nama  : ". $this->nama .  "<br>" .  "<br>"
      . "NIP : " . $this->nip .  "<br>" . "<br>" .
      "alamat : " . $this->alamat .  "<br>" ."<br>" .
       "jumlah hari kerja : " . $this->jumlah_hari_kerja ."<br>";
      
       
    }
}




if (isset($_POST['simpan'])) {
    $wali = $_POST['nama'];
    $km = $_POST['nip'];
    $seker=$_POST['al'];
    $benda=$_POST['jumker'];
    
}  
    $al = new Gaji($wali,$km,$seker,$benda,$jm);
    echo $al->wali() . "<br>";

    echo $al -> gaji_bersih (). '<br>';
    echo $al -> gaji_kotor (). '<br>';
  
  ?>