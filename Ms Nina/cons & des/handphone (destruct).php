<?php

class Handphone{
    public $jumlahPulsa;

    public function __construct($pulsa){
        $this->jumlahPulsa = $pulsa;
    }

    public function mengirimPesan($tarif, $jumlahPesan=1){
        $this->jumlahPulsa -= $tarif*$jumlahPesan;
    }

    public function __destruct(){
        echo " Jumlah pulsa sekarang: ";
        echo $this->jumlahPulsa;
    }
}

$hp_maryam = new Handphone(5000);

echo "Jumlah pulsa Maryam diawal : ";
echo  $hp_maryam->jumlahPulsa;

$hp_maryam->mengirimPesan(500);