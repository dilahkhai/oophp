<?php

class Induk{
    final public function Test() {
        return "Display Test Pada Induk";
    }
}

class Anak extends Induk{
    public function Test(){
        return "Dsiplay Text pada Anak";
    }
}

$object = new Anak;
echo $object->Test();
