<?php
declare(strict_types=1);
function byValue($arg) {}
function byRef(&$arg){
    $arg='changed becuase it is passed by reference';
}
$arg = 20;
echo byRef($arg);
function defValue($arg="asdf") {
    echo "default value is : $arg";
}
echo defValue();


function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
{
    $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
    return "Making a cup of ".join(", ", $types)." with $device.\n";
}
newLine();
echo makecoffee();
newLine();
echo makecoffee(array("cappuccino", "lavazza"), "teapot");

$a = true;
var_dump($a instanceof string);
if($a instanceof bool) {
    echo 'huzzah';
}

class A {
    function echo() {
        echo 'IM A!!';

    }
}
class B extends A{
    function echo() {
        echo 'IM B!!';

    }

}
function forA(A $a) {
    $a ->echo();
}
forA(new B);

function forString(string $s){
echo $s;
}

$intArr;
for($i = 1; $i < 11 ; $i++){
$intArr[$i] = $i;
}

function sumofarr(array $arr){
$sum = 0;
foreach($arr as $num){
    $sum+=$num;
}
echo $sum;
}
sumofarr($intArr);
function newLine(){echo '<br>';}


$message = 'hello';

// No "use"
$example = function () {
    var_dump($message);
};
$example();

// Inherit $message
$example = function () use ($message) {
    var_dump($message);
};
$example();

$message = 'world';
$example();

// Inherit by-reference
$example = function () use (&$message) {
    var_dump($message);
};
$example();

// The changed value in the parent scope
// is reflected inside the function call
$message = 'world12';
$example();

// Closures can also accept regular arguments
$example = function ($arg) use ($message) {
    var_dump($arg . ' ' . $message);
};
$example("hello");


?>