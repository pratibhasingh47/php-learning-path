<?php
    declare(strict_types = 1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function sayHello( string $name){
        return "Hello " . $name . "!";
    }
    $test = sayHello("Pratibha");
    // $test = sayHello(123);
    echo $test;
    echo "<br>";

    function calculator(int $num1 ,int $num2){
        $result = $num1+$num2;
        return $result;
    }

    $test2 = calculator(10,150);
    echo $test2;

    ?>
</body>
</html>