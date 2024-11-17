<nav id="navbar-container">
    <div class="nav-left">
        <ul>
            <li><a href="../pages/index.php">Home</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="../pages/index.php#Menu-section">Menu</a></li>
        </ul>
    </div>
    <div class="nav-right">
        <ul>
            <li><a href="#">Delivery</a></li>
            <li><a href="#">Join Our Team</a></li>
            <?php
            session_start();
            if(isset($_SESSION['username'])){
                echo '<li><a href="../users/logout.php">Logout</a></li>';
            }else {
                echo '<li><a href="../pages/login.html">Login</a></li>';
            }
            ?>
            
        </ul>
    </div>
</nav>