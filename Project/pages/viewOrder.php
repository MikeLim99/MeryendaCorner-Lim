<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/viewOrderstyle.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>View my Order</title>
</head>
<body>
<?php include "../pages/navbar.php"; ?>
    <div class="searchSomething">
        <div class="inputform">
            <form action="" method="post">
                <h2>Check my Order</h2>
                <input type="text" name="orderId" id="orderId" placeholder="Order number">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="content">
            <table>
                <?php include "../backEnd/search_order.php"; ?>
                <?php include "../backEnd/deleteOrder.php"; ?>
            </table>
        </div>
        <script src="../js/actionBtn.js"></script>
    </div>
</body>
</html>