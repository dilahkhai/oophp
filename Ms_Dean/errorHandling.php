<?php
/*
penanganan kesalahan 
- simple die() laporan
- set handler error (custom error)
- memicu kesalahan (trigger)

*/



// $file=fopen('welcom.txt', 'r');


# contoh menggunakan die()
// if(!file_exists('welcome.txt')){
//     die('File Not Found');
// } else {
//     $file=fopen('welcome.txt', 'r');
// }


# pengujian error handler untuk variabel tanpa output 
// error handler function 
// function customError($errno, $errstr){
//     echo "<br>Error: <br> [$errno] $errstr";
// }

// //set error handler 
// set_error_handler("customError");
// //trigger error
// echo($test);

// $test=2;
// if($test>1){
//     trigger_error("Value must be 1 or below");
// }



# contoh E_USER_WARNING
//error handler function
// function customError($errno, $errstr){
//     echo "\n Error: \n [$errno] $errstr";
//     echo "Ending Script";
// }
// //set error handler 
// set_error_handler("customError", E_USER_WARNING);

// //trigger error
// echo($test);

// $test=2;
// if($test>1){
//     trigger_error("Value must be 1 or below \n", E_USER_WARNING);
// }



# kirim error 
function customError($errno, $errstr){
    echo "<br>Error: <br> [$errno] $errstr";
    echo "Webmaster has been notified";
    error_log("Error : [$errno] $errstr", 1, 
    "dilahkhaizure@gmail.com", "From: webmaster@example.com");
}

//set error handler 
set_error_handler("customError");
//trigger error
echo($test);

$test=2;
if($test>1){
    trigger_error("Value must be 1 or below");
}