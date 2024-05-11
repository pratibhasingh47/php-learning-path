<?php 

if($_SERVER["REQUEST_METHOD"=="POST"])
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd= $_POST["pwd"];

    try {
        require_once "dbh.inc.php"; 

        // $query = "INSERT INTO Users(username,pwd,email) VALUES ($username,$pwd,$email);";

        // $query = "INSERT INTO users(username,pwd,email) VALUES (?,?,?);";

        $query = "INSERT INTO users(username,email,pwd)
        VALUES (:username.:email,:pwd);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pwd",$pwd);

        $stmt->execute([$username,$email,$pwd]);

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        die();
        // exit();

    }
    catch ( PDOException $e ) 
    {
        die("Query Failed : " . $e->getMessage());
    }

}
else{
    header("Location : ../index.php");
} 


// <?php


// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["username"];
//     $email = $_POST["email"];
//     $pwd = $_POST["pwd"];

//     try {
//         require_once "dbh.inc.php";

//         $query = "INSERT INTO users(username,pwd,email) VALUES (?,?,?);";

//         $stmt = $pdo->prepare($query);

//         $stmt->execute([$username, $pwd, $email]);

//         $pdo = null;
//         $stmt = null;

//         header("Location: ../index.php");
//         exit();

//     } catch (PDOException $e) {
//         die("Query Failed : " . $e->getMessage());
//     }

// } else {
//     header("Location: ../index.php");
//     exit();
// }

