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

//spaceship operater '<=>' 
//if x is greater then y then returns 1
//if x is equal then y then returns 0
//if x is smaller then y then returns -1

$x=10;
$y=5;
echo $x <=> $y;

$str1 = "Partha";
$str2 = " Biswas";

// . is used for concatination and .= is used for concatination assignment
$str1.=$str2;
echo "\n".$str1;


$val = false;

$val ? $val2 = "true" : $val2 ="false";

// $val > 2 ? echo "its 2 " : echo "its not 2 " ; 
?>
<?= $var ?>


