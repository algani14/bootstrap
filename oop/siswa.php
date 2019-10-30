<?php



class Siswa{

    public $nama,$alamat,$usia;
    


    public function datadiri ($nama=null, $alamat=null,$usia=null)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->usia = $usia;
        return "Nama : $nama <br> Alamat : $alamat <br> Usia : $usia";
    }
    public function hobi($hobi)
    {
        $this->hobi = $hobi;
        return $this->datadiri($this->nama, $this->alamat , $this->usia) . '<br>' . "Hobi : $hobi";

    }
}
$siswa1= new Siswa();
$siswa1-> datadiri('Ahmad','bandung',18). '<br>';
echo $siswa1->hobi('Main Game');
?>