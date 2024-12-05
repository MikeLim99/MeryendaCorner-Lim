<?php include "../includes/session.php"; ?>
<nav>
<div class="logo">
    <img src="../assets/Designer-removebg-preview.png" alt="">
</div>
    <div class="navcontainer">
            <ul>
                <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/location.php">Locations</a></li>
                <li><a href="../pages/index.php#Menu-section">Menu</a></li>
                <li><a href="../pages/contactus.php">Contact us</a></li>
                <li><a href="#">Join Our Team</a></li>
                <?php
                if(isset($_SESSION['username'])){
                    echo '<li><a href="../users/logout.php">Logout</a></li>';
                }else {
                    echo '<li><a href="../pages/login.php">Login</a></li>';
                }
                ?>
            </ul>

    </div>
    <div class="sidebar">
        <div class="navIcon">
            <i class="fa-solid fa-burger"></i>
        </div>
    </div>
</nav>

<script>
    hamburger = document.querySelector(".sidebar");
    hamburger.onclick = function (){
        navBar = document.querySelector(".navcontainer");
        navBar.classList.toggle("active");
    }
</script>

