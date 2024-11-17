<?php
session_start();
include "../database/database.php";

if ($_SERVER['REQUEST_METHOD'] ==='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    try {
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $chckstmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
        $chckstmt -> bindParam(':username', $username);
        $chckstmt -> execute();

        if($chckstmt->rowCount() > 0){
            $user = $chckstmt->fetch(PDO::FETCH_ASSOC);
            include "../pages/navbar.php";
            if(password_verify($password, $user['password'])){
                $_SESSION['username'] = $username;
                if($user['isAdmin'] == 1){
                    header("location: ../adminpage/orderData.php");
                }else {
                    header("location: ../pages/index.php");
                }
            } else {
                echo "<script type='text/javascript'>
                alert('Ivalid username or password please try again.');
                window.location.href = '../pages/login.html';
                </script>";
            }
        }else {
            echo "<script type='text/javascript'>
            alert('Username does not exists.');
            window.location.href = '../pages/login.html';
            </script>";
        }
    }catch(PDOException $e){
        echo "Error :" . $e->getMessage();
    }
}
?>