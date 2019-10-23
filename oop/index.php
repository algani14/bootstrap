<?php

class Manusia{
    public $kulit = 'putih';
    public $kaki = 2;
    public $tangan = 2;
    public $benar= true;
    public $salah= false;
    public $berat = 49.5;


    public function lari(){
        return "berlari dengan kaki";
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
    public function badan (){
        return "berat badan 49.5";
    }
}
$manusia_asli = new Manusia;

echo 'berkulit = ' .$manusia_asli->kulit;
echo '<br>' . 'jumlah kaki = ' .$manusia_asli->kaki;
echo '<br>' . 'jumlah tangan = ' .$manusia_asli->tangan;
echo '<br>' . 'true = ' . $manusia_asli->benar;
echo '<br>' . 'false = ' . $manusia_asli->salah;
echo '<br>' . 'berat badan = ' . $manusia_asli->berat;
echo '<br>' . $manusia_asli->lari();
echo '<br>' . $manusia_asli->makan();
echo '<br>' . $manusia_asli->kulit();
echo '<br>' . $manusia_asli->minum();
echo '<br>' . $manusia_asli->badan();

?>