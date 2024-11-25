<?php
include "../database/database.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $name = $_POST['userName'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    try {
        $success = "Your feedback has been sent, thank you for your wonderful message!";
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $conn->prepare("INSERT INTO feedbacks (userName, email, message) VALUES (:userName, :email, :message)");

        $stmt->bindParam(':userName', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        $stmt->execute();
        if($stmt->execute()){
            echo "
            <div class='popupMessage'>
                <div class='textbox'>
                    <span>" . $success . "</span>
                </div>
            </div>
            ";
        }

    }catch(PDOException $e){
        echo "Error:" . $e->getMessage();
    }
    
}
?>