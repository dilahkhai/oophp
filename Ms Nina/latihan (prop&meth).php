<?php

class book{
    public $title;
    public $writer;
    public $publisher;
    public $page;


    public function pinjamBuku(){
        return "Mau pinjam $this->title karya $this->writer?";

    }

    public function kembalikanBuku(){

    }
}

$buku1 = new book();
$buku1->title = "Jakarta Sebelum Pagi";
$buku1->writer = "Ziggy Zezsyazeoviennazabrizkie";
$buku1->publisher = "Grasindo";
$buku1->page = "280 pages";

// var_dump($buku1);
echo "Title : " . $buku1->title . " " . $buku1->page."<br>";
echo "Writer : " . $buku1->writer . "<br>";
echo "Publisher : " . $buku1->publisher ;
