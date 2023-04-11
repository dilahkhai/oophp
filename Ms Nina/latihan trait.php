<?php
trait halo{
    public function hi(){
        echo "Hi, Good Morning <br>";
    }
}

class salam{
    use halo;

    public function kabar(){
        echo "How are you today?";
    }
}

$test = new salam();
$test->hi();
$test->kabar();