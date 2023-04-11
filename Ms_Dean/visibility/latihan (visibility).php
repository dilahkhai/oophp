<?php

class buku{
    private $publisher = "Grasindo";

    public function publisher(){
        return $this-> publisher;
    }

}

class jsp extends buku{
    public $title = "Jakarta Sebelum Pagi";
    public $writer = "Ziggy Zezsyazeoviennazabrizkie";
    public $page = "280 Pages";
    public $price = "92000";
}
   
$buku1 = new jsp();
echo "Title : " . $buku1->title ."<br>";
echo "Writer : " . $buku1->writer . "<br>";
echo "Page : " . $buku1->page . "<br>" ;
echo "Publisher : " . $buku1->publisher() . "<br>";
echo "Price : " . $buku1->price;

?>