<?php

class Manusia{
    public $kulit = 'putih';
    public $kaki = 2;
    public $tangan = 2;
    public $benar= true;
    public $salah= false;
    public $berat = 49.5;


    public function lari($al){
        return "berlari dengan kaki " . $al;
    }
    public function makan(){
        return "makan dengan tangan";
    }
    public function kulit(){
        return "manusia berkulit putih";
    }
    public function minum(){
        return "minum dengan tangan";
    }
    public function badan ($berat){
        $this-> badan = $berat;
        return "berat badan = " . $berat;
    }
}
$manusia_asli = new Manusia;

echo 'berkulit = ' .$manusia_asli->kulit;
echo '<br>' . 'jumlah kaki = ' .$manusia_asli->kaki;
echo '<br>' . 'jumlah tangan = ' .$manusia_asli->tangan;
echo '<br>' . 'true = ' . $manusia_asli->benar;
echo '<br>' . 'false = ' . $manusia_asli->salah;
echo '<br>' . 'berat badan = ' . $manusia_asli->berat;
echo '<br>' . $manusia_asli->lari('sangat_kencang');
echo '<br>' . $manusia_asli->makan();
echo '<br>' . $manusia_asli->kulit();
echo '<br>' . $manusia_asli->minum();
echo '<br>' . $manusia_asli->badan("49.5");
echo '<br>'. "berat = " . $manusia_asli-> berat;

?>