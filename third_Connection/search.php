<?php

if($_SERVER["REQUEST_METHOD"=="POST"])
{
    $username = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php"; 

        $query = "SELECT * FROM users WHERE username = :usersearch";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username",$usersearch);

        $stmt->execute();

        $result = $stmt->fetchAll()

        $pdo = null;
        $stmt = null;

    } catch ( PDOException $e ) {
        die("Query Failed : " . $e->getMessage());
    }
}
else{
    header("Location : ../index.php");
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Search Result :</h3>

    <?php

    if( empty($result) ){
        echo "<div>";
        echo "<p>There are no result !</p>";
        echo "</div>";
    }
    else{
        foreach( $result as $row ){
            echo htmlspecialchars($row["username"]);
        }
    }

    ?>

</body>
</html>