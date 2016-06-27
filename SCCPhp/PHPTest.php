<html>
<head>
<title>My First PHP Page</title>
</head>
<body>
<?php
$name = "asdf";
$newline = "A newline is \n this should come after newline";
echo "<h1> Hello World! $name </h1>";
echo "<h5>I love using PHP!</h5>";
echo nl2br($newline);
echo '<br>'.'I\'m a single quoted string'."<br>";

$heredocString = <<< Start
This is Mahim Lakhani;
Preparing for SCC Intervie;
First stab at PHP
Start;

echo $heredocString;
$s = <<< start
dot operator is overloaded <br>
in the sense that string.int becomes a string
maybe php isn't statically typed <br>
start;
echo $n = 12;
echo $s.'string dotted'.$n;


$destination = "New York";
echo "Traveling to $destination<br />";
switch ($destination){
    case "Las Vegas":
        echo "Bring an extra $500";
        break;
    case "Amsterdam":
        echo "Bring an open mind";
        break;
    case "Egypt":
        echo "Bring 15 bottles of SPF 50 Sunscreen";
        break;
    case "Tokyo":
        echo "Bring lots of money";
        break;
    case "Caribbean Islands":
        echo "Bring a swimsuit";
        break;
    default:
        echo "Bring lots of underwear!";
        break;
}
echo '<br>';
$a = 20;
function test($a) {
    $a = 10;
}
test($a);
echo "after calling function test value is :::: $a <br>";

function test2(&$a) {
    $a = 10;
}
test2($a);
echo "after calling function test2 value is :::: $a <br>";
//defining array
$arr[0] = "asdf";
$arr[1] = 23;
$arr[2] ="qwerty";
$arr['vvv'] = 'vvv';
//echo $arr[0].$arr[1].$arr[2].$arr['vvv'];
echo "<br>";
foreach ($arr as $key => $value)echo "key :: $key :: value :: $value";
echo "<br>";

$string = "asdf";
$finds = strpos($string,"e");
$f = false;
echo "echoing boolean";
echo "".$f;
?>

</body>
</html>
