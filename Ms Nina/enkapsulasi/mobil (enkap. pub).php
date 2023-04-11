<?php
class Mobil{
    public $namaMobil, $merk, $warnaMobil, $jenisMobil;

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

class mobilsport extends Mobil{

}

$mobilCello = new Mobil("MC20", "Maserati", "Manual");
$mobilCello ->setCat("Hitam");

$mobilHilmy =  new mobilsport("R8", "Audi", "Manual");
$mobilHilmy ->setCat("Hitam");

echo "Mobil Cello: " . $mobilCello->getlabel();
echo "<br>";
echo "Mobil Hilmy: " . $mobilHilmy->getlabel();