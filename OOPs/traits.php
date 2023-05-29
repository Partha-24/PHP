<?php

trait msg1{
    public function sendMsg1(){
        echo "This is msg from msg1\n";
    }
}

trait msg2{
    public function sendMsg2(){
        echo "This is msg from msg2\n";
    }
}

class msgClass1{
    use msg1;
}

class msgClass2{
    use msg1, msg2;
}

$obj1 = new msgClass1();
$obj2 = new msgClass2();

$obj1->sendMsg1();
$obj2->sendMsg1();
$obj2->sendMsg2();


//multiple inhertance using traits
class hello {
    public function sayHello(){
        echo "Hello";
    }
}

trait world{
    public function sayWorld(){
        echo " World!";
    }
}

class helloWorld extends hello{
    use world;
}

$helloWorldObj = new helloWorld();
$helloWorldObj->sayHello();
$helloWorldObj->sayWorld();