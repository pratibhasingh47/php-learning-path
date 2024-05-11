<?php 

if($_SERVER["REQUEST_METHOD"=="POST"]){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd= $_POST["pwd"];

    try {
        require_once "dbh.inc.php"; 

        $query = "UPDATE  users SET username = :username,pwd = :pwd,email=:email WHERE id = 2;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pwd",$pwd);

        $stmt->execute([$username,$email,$pwd]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();

    } catch ( PDOException $e ) {
        die("Query Failed : " . $e->getMessage());
    }

}
else{
    header("Location : ../index.php");
} 