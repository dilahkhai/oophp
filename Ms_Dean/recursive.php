<?php

/*
- sebuah function yang memanggil dirinya sendiri
- function biasa, tidak ada keyword khususnya

ex:
function funcName{
    funcName()
}
funcName();
*/

// function sayHelloWorld(){
//     echo "Hello World ";
//     sayHelloWorld();
// }

// sayHelloWorld();


// pengulangan menggunakan for

// for($i = 1; $i <= 100; $i++){
//     echo "Perulangan ke-{$i}\n";
// }


// pengulangan denga recursive
// function tampilkanAngka(int $jumlah, int $index = 1){
//     echo "Sebelum memanggil diri sendiri [{$index}] <br>\n";

//     if($index < $jumlah){
//         tampilkanAngka($jumlah, $index + 1);
//     } else {
//         echo "Proses Berakhir";
//     }

//     echo "Sebelum memanggil diri sendiri [{$index}] <br>\n";
// }

// tampilkanAngka(5);


// bagian faktorial
// n i faktorial(n-1)

// function faktorial ($n){
//     echo "faktorial({$n}) = faktorial(" . ($n - 1) .")\n";

//     if($n > 2){
//         faktorial($n - 1);
//     }
// }

// faktorial(5);


//faktorial dengan hasil

// function faktorial($n){
//     if($n > 2){
//         return $n * faktorial($n - 1);
//     } else {
//         return $n;
//     }

// }

// # panggil fungsi faktorial
// $hasil = faktorial(5);
// echo $hasil;

//menampilkan deret fibonacci menggunakan php
function fibonacci($jumlah){
    if ($jumlah <= 1) {
        return $jumlah;
    } else {
    return fibonacci($jumlah - 1) + fibonacci($jumlah - 2);
    }
}

function deretFibonacci($a){
    for ($n= 0; $n <= $a; $n++){
        echo fibonacci($n), ' ';
    }
}

echo fibonacci(10);
echo "<br>";
echo deretFibonacci(10);

?>