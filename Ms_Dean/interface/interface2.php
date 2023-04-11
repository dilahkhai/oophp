<?php

//mengimplementasikan beberapa interface

interface Car{
    public function setVariant($variant);
    public function getVariant();
}

interface Wheeler{
    public function setWheel($wheel);
    public function getWheel();
}

class Mercedes implements Car, Wheeler{
    private $variant;
    private $wheel;

    public function setVariant($variant){
        $this->variant = $variant;
    }

    public function getVariant(){
        return $this->variant;
    }

    public function setWheel($wheel){
        $this->wheel = $wheel;
    }

    public function getWheel(){
        return $this->wheel;
    }
}

$gls = new Mercedes();
$gls->setVariant('Mercedes-Benz EQS');
$gls->setWheel(4);

echo 'Mobil '.$gls->getVariant(). ' dengan jumlah roda '.$gls->getWheel();

?>