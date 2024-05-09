<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $string = "Hello World";
    echo strlen($string);
    echo "<br>";

    echo strpos($string , "r");
    echo "<br>";
    echo strpos($string , "Wo");
    echo "<br>";
    echo str_replace("World","PHP",$string);
    echo "<br>";
    echo strtoupper($string);
    echo strtolower($string);
    echo "<br>";
    echo substr($string,2,10);
    echo "<br>";
    print_r( explode(" ",$string) );
    echo "<br>";

    $number = -5.5;
    echo abs($number);
    echo "<br>";
    echo round($number);
    echo "<br>";
    echo pow(2,3);
    echo "<br>";
    echo sqrt(169);
    echo "<br>";
    echo rand(1,100);
    echo "<br>";

    $array1 = ['apple','mango','banana','leechi'];
    $array2 = ['greenapple'];
    echo count($array1);
    echo "<br>";
    echo is_array($array1);
    echo "<br>";
    echo array_push($array1,"kiwi");
    echo "<br>";
    echo array_pop($array1);
    echo "<br>";
    print_r(array_reverse($array1));
    echo "<br>";
    print_r(array_merge($array1,$array2));
    echo "<br>";

    echo date ("Y-m-d H:i:s");
    echo time(); 

    ?>
</body>
</html>