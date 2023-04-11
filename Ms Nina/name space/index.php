<?php
require __DIR__.'/RequestInterface.php';
require __DIR__.'/http/request.php';
require __DIR__.'/Api/request.php';



//keyword as
use http\Request as httpRequest;
use Api\Request as ApiRequest;

// use Api\Request; ->1
$request = new ApiRequest(); // ->2
$request->handle();
echo PHP_EOL;

// use http\Request; ->1
$request = new httpRequest(); // ->2
$request->handle();
echo PHP_EOL;

//FQCN (Fully)
// penyebutan nama class bersamaan dengan namespace-nya