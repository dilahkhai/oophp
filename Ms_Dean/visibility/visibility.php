<?php

//public
//protected
//private

class Kendaraan{
    private $harga = 50000;
    public function harga(){
        return $this-> harga;
    }
} 
  
 class Mobil extends Kendaraan{
    public $merek = "Avanza";
    public $jumlahRoda ;

   
}
$Mobil = new Mobil();
echo "Merek : " . $Mobil->merek;
echo "<br>";
echo "Harga : " . $Mobil -> harga();


?>