<div class="logo">
    <img src="../assets/Designer-removebg-preview.png" alt="">
</div>
<nav>
    <div class="navcontainer">
        <div class="nav-left">
            <ul>
                <li><a href="../pages/index.php">Home</a></li>
                <li><a href="../pages/location.php">Locations</a></li>
                <li><a href="../pages/index.php#Menu-section">Menu</a></li>
            </ul>
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="../pages/contactus.php">Contact us</a></li>
                <li><a href="#">Join Our Team</a></li>
                <?php
                session_start();
                if(isset($_SESSION['username'])){
                    echo '<li><a href="../users/logout.php">Logout</a></li>';
                }else {
                    echo '<li><a href="../pages/login.php">Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="sidebar">
        <div class="navIcon">
            <i class="fa-solid fa-burger"></i>
        </div>
    </div>
</nav>

