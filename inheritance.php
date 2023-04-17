<?php
class bike{

    function __construct(){
        echo "Constructor of class BIKE <br>";
    }

    function intro(){
        echo $this->pri(),"<br>";
        return "intro function got Called by ";
    }

    public function pub(){
        return "PUBLIC function of BIKE ";
    }

    private function pri(){
        return "PRIVATE function of BIKE ";
    }

    protected function pro(){
        return "PROTECTED function of BIKE ";
    }
}

class engine extends bike{
    function call(){
        echo $this->intro(), "ENGINE<br>";
        echo $this->pub(), "called by ENGINE<br>";
        echo $this->pro(), "called by ENGINE<br>";
    }
}

class tyre extends bike{
    function __construct(){
        Parent::__construct();
        echo "Constructor of class TYRE <br>";
    }
}

$obj1 = new engine();
$obj2 = new tyre();
$obj1->call();

?>