<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $fruits = ["Apple" , "Banana" , "Cherry"];

        unset($fruits[1]);
        array_splice($fruits,0);

        // echo $fruits[0];
        $fruits[] = "Orange";
        // echo $fruits[3];

        $tasks = [
            "Study" =>  "Pratibha",
            "trash" => "Bella",
            "vaccum" =>"Freda"
        ];

        print_r($tasks);

        echo count($tasks);

        sort($tasks);

        $test = ["mango"];
        array_splice($fruits,2,0,$test);
        print_r($fruits);

    ?>
</body>
</html>