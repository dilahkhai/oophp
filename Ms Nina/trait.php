<?php
trait massage1{
    public function msg1(){
        echo "OOP is fun!";
    }
}

trait massage2{
    public function msg2(){
        echo "OOP reduces code duplication!";
    }
}

class Welcome {
    use massage1;
}
class Welcome2 {
    use massage1, massage2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";

$obj2 = new Welcome2();
$obj->msg1();
$obj->msg2();