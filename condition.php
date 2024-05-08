<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $bool = true;
        $a = "1";
        $b = 4;

        $result = match ( $a ){
            1,10,100 => "Variable a is equal to 1",
            2 => "Variable a is equal to 2",
            3 => "Variable a is equal to 3",
            4 => "Variable a is equal to 4",
            default => "none match"
        };

        echo $result;
        echo '<br>';


        switch ($a){
            case 1 : 
                echo "value is 1";
                break;
            case 3 : 
                echo "value is 3";
                break;
            default : 
                echo "This is default";
        }
        echo '<br>';

        

        if( $a < $b && $bool ){
            echo "First condition is true";
        }
        else if ( $a < $b && !$bool){
            echo "second condition is true";
        }
        else{
            echo "No condition is true";
        }

    ?>
</body>
</html>