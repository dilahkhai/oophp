<?php
//private

class Mobil{
    private $namaMobil, $merk, $warnaMobil, $jenisMobil;

    public function __construct ($nama = "nama", $merk = "merk", $jenis= "jenis"){
        
        $this->namaMobil = $nama;
        $this->merkMobil = $merk;
        $this->jenisMobil = $jenis;

    }
    public function setCat($warna = "warna"){
        $this->warnaMobil = $warna; 

    }

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }

    public function getLabel (){
        return "$this->namaMobil, $this->merkMobil, $this->warnaMobil, $this->jenisMobil";
    }

}    

$mobilAbel = new Mobil("MC20", "Masserati", "Automatic");
$mobilAbel ->setCat("Hitam");

echo "Mobil Abel: " . $mobilAbel->getlabel();


