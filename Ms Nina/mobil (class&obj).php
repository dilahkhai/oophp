<?php

class Mobil{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaks = 0;

    public function tambahKecepatan() {

    }
    
    public function kurangiKecepatan() {

    }

    public function belokKiri() {

    }

    public function belokKanan() {

    }

    public function sayHello() {
        return "Hello Driver!";
    }

    public function getLabel() {
        return "$this->nama, $this->merk";
    }

}

$mobil_abel = new Mobil();
$mobil_abel->nama = "MC20";
$mobil_abel->merk = "Masserati";
$mobil_abel->warna = "Black";

$mobil_dilah = new Mobil();

var_dump($mobil_abel -> nama);

// echo "Mobil Abel : " . $mobil_abel->nama, $mobil_abel->merk, $mobil_abel->warna;


// echo $mobil_abel -> sayHello() ;
echo $mobil_abel -> getLabel();
?>