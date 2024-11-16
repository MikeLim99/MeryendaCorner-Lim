<?php
include "../database/database.php";

if($_SERVER['REQUEST_METHOD']==='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $chckstmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $chckstmt->bindParam(':username', $username);
        $chckstmt->execute();

        if ($chckstmt->rowCount() > 0){
            echo "<script type='text/javascript'>
            alert('Username already used, Please try using different username.');
            window.location.href = '../pages/login.html';
            </script>";
        }else {
            $hashedpw = password_hash($password, PASSWORD_DEFAULT);

            $insertstmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $insertstmt->bindParam(':username', $username);
            $insertstmt->bindParam(':password', $hashedpw);
            $insertstmt->execute();

            $_SESSION['username'] = $username;
            echo "<script type='text/javascript'>
            alert('Registration successful!');
            window.location.href = '../pages/index.html';
            </script>";
            exit();
        }

    }catch (PDOException $e){
        echo "Error :" . $e->getMessage();
    }
}
?>