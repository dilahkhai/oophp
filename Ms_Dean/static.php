<?php

// class contohStatic{
// //class
//     public static $angka = 1;
//     //properti

//     public static function halo(){
//         return "Halo " . self::$angka++ . " kali .";
//     }
//     //method
// }

// echo contohStatic:: $angka;
// echo "<br>";
// echo contohStatic:: halo();
// echo "<br>";
// echo contohStatic:: halo();
// echo "<hr>";


// contoh static yang nilainya tetap samameskipun di instasiasi
class contoh{
    public static $angka = 1;

    public static function halo(){
        return "Halo " . self::$angka++ . " kali." . "<br>";
    }
}

$object = new contoh();
echo $object->halo();
echo $object->halo();
echo $object->halo();

echo "<hr>";

$object2 = new contoh();
echo $object2->halo();
echo $object2->halo();
echo $object2->halo();



?>