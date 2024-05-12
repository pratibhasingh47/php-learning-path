
<?php 

if($_SERVER["REQUEST_METHOD"=="POST"]){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd= $_POST["pwd"];

    try {
        require_once "dbh.inc.php"; 

        $query = "INSERT INTO users(username,email,pwd)
        VALUES (:username.:email,:pwd);";

        $stmt = $pdo->prepare($query);

        $options = [
            'cost' =>12
        ];
        
        $hashpwd = password_hash($pwd,PASSWORD_BCRYPT,$options);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":email",$email);
        $stmt->bindParam(":pwd",$hashpwd);

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
