<html>
<head>
<title>My First PHP Page</title>
</head>
<body>
<?php
$name = "asdf";
$newline = "A newline is \n this should come after newline";
echo "<h1> Hello World! " . $name . "</h1>";
echo "<h5>I love using PHP!</h5>";
echo nl2br($newline);
echo '<br>'.'I\'m a single quoted string'."<br>";


?>


</body>
</html>
