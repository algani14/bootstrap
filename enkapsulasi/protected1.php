<?php

class laptop{

    protected $pemilik;
    // buat public method
    protected function hidupkan_laptop()
    {
        return " Hidupkan laptop";
    }
}
//buat objek dari class laptop (instansiasi)
$laptop_anto = new laptop();
//set property\
$laptop_anto ->pemilik = "Anto";

echo $laptop_anto->hidupkan_laptop(); 



?>