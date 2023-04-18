<?php
namespace constants;
class goodbye{
    const MESSAGE = "This is an const variable";

    function printMESSAGE(){
        echo self::MESSAGE;
    }
}

$obj = new goodbye();
echo goodbye::MESSAGE."<br>";
$obj->printMESSAGE();


?>