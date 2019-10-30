<?php
//class manusia
class manusia{
    //property
    var $nama_awal;
    var $nama_akhir;
    var $alamat;
    var $umur;
    
    //method construct di jalankan pertama kali
    function __construct($a , $b , $c , $d){
        $this->nama_awal = $a;
        $this->nama_akhir= $b;
        $this->alamat = $c;
        $this->umur = $d;
        
    }
    
    //method manusia
    function getFullName(){
        $nama_lengkap = $this->nama_awal . " " . $this->nama_akhir;
        return $nama_lengkap;
    }
    
}
//instansiasi class manusia
$manusia = new manusia('Alghani', 'saha' ,' bandung', 17);
 
//memanggil method tampilkan_nama dari class manusia
echo 
"Nama Saya ". " " . $manusia->getFullName(),
" Alamat di $manusia->alamat,
Umur Saya $manusia->umur Tahun";