<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $test = "Hello PHP!";

    function myfunc(){
        
        global $test;
        // Loacal variable
        $localvariable = "Hello !";

        // return $localvariable;
        return $test;
    }

    // echo $localvariable;
    echo myfunc();
    echo "<br>";

    function staticv()
    {
        static $staticvar = 0;
        $staticvar++;
        return $staticvar;
    }

    echo staticv();
    echo staticv();
    echo staticv();
    echo staticv();

    class Myclass
    {
        public $var = "Hello world";

        public function method()
        {
            echo $this->var;
        }
    }

    ?>
</body>
</html>