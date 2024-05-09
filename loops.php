<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    for ($i = 0 ; $i <= 10 ; $i++ )
    {
        echo "This is iteration number " . $i ."<br>";
    }

    echo "<br>";

    $boolean = true;
    $test = 5;

    while($test < 10)
    {
        echo "THis is while loop " . $boolean;
        echo "<br>";
        // $boolean = false;
        $test++;
    }

    echo "<br>";

    $a = 10;

    do
    {
        echo "This is do while";
    }while($a <10);

    echo "<br>";

    $fruitsss = array("apple","banana","lechi");
    $fruits = array("apple" => "red", "banana" => "Yellow");

    foreach($fruits as $fruit =>$color)
    {
        echo "This is a ".$fruit . "that has an color of " . $color . "<br>";
    }

    echo "<br>";
    
    foreach( $fruitsss as $fruit )
    {
        echo "Ths is a fruit " . $fruit . "<br>";
    }

    ?>
</body>
</html>