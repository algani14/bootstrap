<?php

class hp{

    public $jenis;
    protected $pasword = "1234";
    private $pin= "1234";
    // buat public method
    public function masuk_hp()
    {
        $this->pin;
        return "masuk hp = ". $this->pin;
    }
}
class aplikasi extends hp{

    public function foto()
    {
        return "<br> Masuk Aplikasi = ".  $this->pasword;
    }
}
$hp = new hp();
$aplikasi = new aplikasi();

$hp->jenis = "Android<br>";
echo $hp->jenis;
echo $hp->masuk_hp();
echo $aplikasi->foto();


?>