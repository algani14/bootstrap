<?php

class laptop{

    public $pemilik;
    // buat public method
    public function hidupkan_laptop()
    {
        return " Hidupkan laptop";
    }
}
//buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
//set property\
$laptop_anto ->pemilik = "Anto";

//tampilkan property
echo $laptop_anto->pemilik; //Anto

//tampilkan method
echo $laptop_anto->hidupkan_laptop(); // "Hidupkan laptop"

?>