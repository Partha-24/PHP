<?php
namespace constants;
class goodbye{
    const MESSAGE = "This is an const variable\n";
    function printMESSAGE(){
        echo self::MESSAGE;
    }
}
echo "inside constant.php\n";
$obj = new goodbye();
echo goodbye::MESSAGE."\n";
$obj->printMESSAGE();


?>