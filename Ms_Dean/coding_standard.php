<?php

// # Penamaan class menggunakan StudlyCaps
// class NameClass{
//     //body
// }

// class Anotherclass{
//     //body
// }

// class AnOtherClass{
//     //body
// }


// # Penamaan Constant
// class ClassName{
//     const VERSION = '1.0';
//     const DATE_APPROVED = '2012-09-23';
// }


// # Penamaan method menggunakan camel class
// class myClass{
//     //method
//     function dataAngka(){
//         //body
//     }
//     function camelCase(){
//         //body
//     }
// }




// # ========== PSR - 2 ==========


// # Penulisan Visibility
// class ClassName1{
//     public $foo = null; //visibility pada property

//     //visibility pada method
//     public function fooBarBaz($arg1, $arg2, $arg3 = []){
//         //body
//     }
// }


// #abstract, final, static
// abstract class ClassName2 {
//     protected static $foo;

//     abstract protected function halo();

//     final public function hai(){
//         //body
//     }


// }


// # structure if else
// if($case1){
//     //if body
// } elseif($case2){
//     //elseif body
// } else {
//     //else body
// }


// # switch case
// $angka = 9;
// switch ($angka){
//     case 0:
//         echo "Angka Nol";
//     break;
//     case 1:
//         echo "Angka Satu";
//     break;
//     case 2:
//         echo "Angka Dua";
//     break;
//     case 3:
//         echo "Angka Tiga";
//     break;
//     default :
//     echo "Angka tidak ditemukan";
//     break;
// }


// #do while
// $i = 2;
// do {
//     echo $i;
//     echo "<br>";
//     $i++;
// } while ($i <= 10);


# foreach
// foreach($array as $key => $value){
//     //statement
// }

$bulan = array('Januari', 'Februari', 'Februari', 'Maret');
foreach($bulan as $nama_bulan){
    echo $nama_bulan. '\n';
}
?>