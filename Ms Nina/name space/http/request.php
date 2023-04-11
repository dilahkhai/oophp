<?php
namespace http;
use RequestInterface;
class Request implements RequestInterface {
    public function handle(){
        echo 'Handle HTTP Request';
    }
}