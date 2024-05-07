<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo $_SERVER["DOCUMENT_ROOT"];
        echo "<br>";
        echo $_SERVER["PHP_SELF"];
        echo "<br>";
        echo $_SERVER["SERVER_NAME"];
        echo "<br>";
        echo $_SERVER["REQUEST_METHOD"];
        
        echo $_GET["name"];
        echo "<br>";
        echo $_GET["lastname"];
        echo "<br>";
        echo $_REQUEST["lastname"];
        echo "<br>";

        echo $_FILES["names"];
        echo $_COOKIE["name"];
        $_SESSION["city"] = 'Udaipur';
        echo $_SESSION["city"];

        $_ENV[];
    ?>
</body> 
</html>