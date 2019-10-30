<?php

class Aritmatika{

    public $tambah,$tambah1;
    public $kurang;
    public $kali;
    public $bagi;
    
    public function hitung($bil1=null,$bil2=null)
    {
        $this->tambah = $bil1;
        $this->tambah1 = $bil2;
        return "Perhitungan  $bil1+$bil2 = " . ($bil1+$bil2);
        
        
    }
    public function hitung1($bil1=null,$bil2=null)
    {
        $this->tambah = $bil1;
        $this->tambah1 = $bil2;
        return "Perhitungan  $bil1-$bil2 = " . ($bil1-$bil2);
        
    }
    public function hitung2($bil1=null,$bil2=null)
    {
        $this->tambah = $bil1;
        $this->tambah1 = $bil2;
        return "Perhitungan  $bil1*$bil2 = " . ($bil1*$bil2);
        
    }
    public function hitung3($bil1=null,$bil2=null)
    {
        $this->tambah = $bil1;
        $this->tambah1 = $bil2;
        return "Perhitungan  $bil1/$bil2 = " . ($bil1/$bil2);
        
    }
}
$hitung1 = new Aritmatika();

echo $hitung1 -> hitung (20,10). '<br>';
echo $hitung1 -> hitung1 (20,10). '<br>';
echo $hitung1 -> hitung2 (20,10). '<br>';
echo $hitung1 -> hitung3 (20,10). '<br>' . '<hr>';


$hitung1 = new Aritmatika();
echo $hitung1 -> hitung (10,5). '<br>';
echo $hitung1 -> hitung1 (10,5). '<br>';
echo $hitung1 -> hitung2 (10,5). '<br>';
echo $hitung1 -> hitung3 (10,5). '<br>' . '<hr>';


?>