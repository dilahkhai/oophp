<?php

/*
- kelas abstrak yang sama sekali tidak memiliki implementasi
-murni sebagai template
- gak boleh ada properti , deklarasi methodnya saja
- method bersifat public
- keyword : interface dan implementasi
- tidak bisa di instansiasi menjadi object
*/

interface Car{
    public function setVariant($variant);
    public function getVariant();

    public function setGear(); //masukkan gigi

}

class Mercedes implements Car{
    private $variant;

    public function setVariant($variant){
        $this->variant = $variant;
    }

    public function getVariant(){
        return $this->variant;
    }

    public function setGear(){

    }
}


class Manual implements Car{
    private $variant;

    public function setVariant($variant){
        $this->variant = $variant;
    }

    public function getVariant(){
        return $this->variant;
    }

    public function setGear(){
        $step1 = "Injak Kopling <br>";
        $step2 = "Masukkan Gigi <br>";
        $step = $step1.$step2;
        return $step;
    }

}


class Matic implements Car{
    private $variant;

    public function setVariant($variant){
        $this->variant;
    }

    public function getVariant(){
        return $this->variant;
    }
    public function setGear(){
        $step1 = "";
        $step2 = "Masukkan Gigi <br>";
        $step = $step1.$step2;
        return $step;
    }
}


$unimog = new Mercedes();
$unimog->setVariant('Unimog');
echo $unimog->getVariant();

echo "<hr>";

echo "Manual : <br>";
$avanza = new Manual();
echo $avanza->setgear();

echo "<hr>";

echo "Matic :   <br>";
$brio = new Matic();
echo $brio->setGear();

?>