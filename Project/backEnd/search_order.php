<?php
include "../database/database.php";

if($_SERVER['REQUEST_METHOD']==='POST'){
    $id = $_POST['orderId'];

    try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM orders WHERE order_id = :order_id");

    $stmt->bindparam(':order_id', $id);

    $stmt->execute();

    $result = $stmt->fetch();
    if($result){
        echo
            "<tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Main Order</th>
                <th>Side Order</th>
                <th>Total Price</th>
                <th>Actions</th>
            </tr>";
            
            echo 
        '
        <tr>
        <td>' .$result['order_id'] .'</td>
        <td>' .'<input type="text" id="updateField" value="'.$result['cx_name'].'" disabled>' .'</td>
        <td>' .'<input type="text" id="updateField" value="'.$result['cx_email'].'" disabled>' .'</td>
        <td>' .'<input type="text" id="updateField" value="'.$result['contact_number'].'" disabled>' .'</td>
        <td>' .'<input type="text" id="updateField" value="'.$result['main_menu'].'" disabled>'.'</td>
        <td>' .'<input type="text" id="updateField" value="'.$result['side_menu'].'" disabled>' .'</td>
        <td>' .$result['total_price'].'</td>
        <td>
            <a href="../pages/updateForm.php?order_id='. $result['order_id'] .'"><i class="fa-regular fa-pen-to-square"></i></a>
            <a href="viewOrder.php?order_id='. $result['order_id'] .'"><i class="fa-solid fa-trash" style="color: #ff4d70;"></i></a>
        </td>
        </tr>';
    }else {
        echo "Order number does not exists, Please check the order number and try again.";
    }
    }catch(PDOException){
        echo "ERROR : " . $e->getMesssage();
    }
}
?>
