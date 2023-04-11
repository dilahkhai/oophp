<?php

interface book{
    public function setTitle($title);
    public function getTitle();
    public function setMethod(); 
}

class scroll implements book{
    private $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setMethod(){
        $scroll1 = "Scroll Up";
        $scroll2 = "Scroll Down";
        $scroll = $scroll1. " and " .$scroll2;
        return $scroll;
    }
}

class swipe implements book{
    private $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setMethod(){
        $swipe1 = "Swipe Right";
        $swipe2 = "Swipe Left";
        $swipe = $swipe1. " and " .$swipe2;
        return $swipe;
    }
}

class tab implements book{
    private $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setMethod(){

    }
}

$tab = new tab();
$tab->setTitle('Always and Forever, Lara Jean');
echo "Book Title: " . $tab->getTitle();

echo "<hr>";

echo "Scroll Method: <br>";
$method1 = new scroll();
echo $method1->setMethod();

echo "<hr>";

echo "Swipe Method: <br>";
$method2 = new swipe();
echo $method2->setMethod();




?>