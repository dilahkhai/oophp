<?php


/*
- abstract = class yg tidak dapat di instansiasi
- minimal memiliki 1 method (abstract)
- hanya kelas turunan saja yang bisa dintansiasi
*/

abstract class Mobil{
    abstract function spec();
}

class inova extends Mobil{
    function spec(){
        $nama="Nama Mobil: Inova";
        $kapasitas="Kapasitas: 5 Orang";
        
        echo $nama;
        echo "<br>";
        echo $kapasitas;
    }
}

$inova = new inova();
$inova->spec();