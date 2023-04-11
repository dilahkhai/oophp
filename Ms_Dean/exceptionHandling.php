<?php

/*

exception = cara untuk menghentikan suatu fungsi jika menemukan 
data yang tidak bisa digunakan 

try{
    kode yang dapat throw exception
} catch (Exception $e){
    kode yang berjalan saat exception tertangkap
} finally {
    kode yang selalu berjalan terlepas dari dari apakah exceptiom ditangkap
}
*/

function divide($divideend, $divisor){
    if($divisor==0){
        throw new Exception("Divisor by Zero");
    }
    return $dividend / $divisor;
}

//echo divide(5,0);

try{
    echo divide(5,0);
} catch (Exception $ex){
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
} 

?>