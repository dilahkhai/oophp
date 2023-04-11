<?php

final class Induk{
    public function Test(){
        return "Display Test pada Induk";
    }
}

//gak bisa enxtends
class Anak extends Induk{
    public function Test(){
        return "Display Test pada Anak";
    }
}

$object = new Induk;
echo $object->Test();