<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $a = "Hello";
        $b = "World!";
        $c = $a ." " .$b;
        echo $c;
        echo "<br>";


        echo 1 + 2;
        echo "<br>";
        echo 10 % 4;
        echo "<br>";
        echo 10 ** 4; //power
        echo "<br>";
        echo 1 + 2 *4;
        echo "<br>";
        echo (1 + 2) *4;
        echo "<br>";


        $x = 2;
        $x = $x +7;
        $x += 5;
        echo $x;
        echo "<br>";


        $w = 2;
        $p = 4;
        if( $w != $p and $w < $p ){
            echo "This statement is true";
            echo "<br>";
        };
        

        $w = 4;
        $p = 4;
        if( $w === $p ){            //Same datatype and values
            echo "This statement is true";
        };

    ?>
</body>
</html>