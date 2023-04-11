<?php

/*
constant = sebuah identifier untuk menyimpan nilai, berbeda dengan variable
constant = nilai yang sudah disimpan tidak dapat diubah (permanent)
*/

//tulis nama constant dengan huruf besar
define('NAMA', 'Dilah Khaizure');
// define tidak bisa disimpan dalam class, harus diluar (const. global)
echo NAMA;

echo "<br>";

const UMUR = 16;
echo UMUR;

echo "<br>";

class coba{
    const NAMA = 'Dilah Khaizure';
}

echo coba::NAMA;

echo "<br>";


class cobaLagi{
    public $kelas = __CLASS__;
}

$obj = new cobaLagi;
echo $obj->kelas;

echo "<br>";

//magic method
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";


?>