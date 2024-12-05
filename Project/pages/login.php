<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styling.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Login - Meryenda Corner</title>
</head>
<body>
    <section>
    <?php include "../includes/session.php"; ?>
    <div class="container">
        <!-- login container -->
        <div class="3dholder">
            <div class="logincontainer" id="logincontainer">
                <div class="formfield" id="inputfield">
                    <h1 class="login">Login</h1>
                    <form method="post" action="../users/login.php">
                        <div class="inputfield">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="inputfield">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" required>
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="links">
                            <a href="#">Forgot Password?</a>
                            <a href="#" id="registerToggle">Sign up!</a>
                        </div>
                        <div class="btn">
                            <button type="submit">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="registercontainer" id="registercontainer">
                <div class="formfield" id="inputfield2">
                    <h1 class="login">Register</h1>
                    <form method="post" action="../users/register.php">
                        <div class="inputfield">
                            <label for="username">Username :</label>
                            <input type="text" name="username" id="username" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="inputfield">
                            <label for="password">Password :</label>
                            <input type="password" name="password" id="password" required>
                            <i class="fa-solid fa-key"></i>
                        </div>
                        <div class="links">
                            <a href="#" id="logintoggle">Login instead.</a>
                        </div>
                        <div class="btn">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- right side of the container -->
        <div class="rightcontainer">
            <div class="logodesign">
                <img src="../assets/Designer-removebg-preview.png" alt="">
            </div>
            <img class="img" src="../assets/pngtree-d-illustration-of-a-zinger-burger-yummy-fast-food-on-transparent-png-image_14224178.png" alt="">
        </div>
    </div>
</section>
<script>
const registerbtn = document.getElementById('registerToggle');
const loginbtn = document.getElementById('logintoggle');
const registerform = document.getElementById('registercontainer');
const loginform = document.getElementById('logincontainer');
const inputfields = document.getElementById('inputfield');
const inputfields2 = document.getElementById('inputfield2');

loginbtn.addEventListener('click', () => {
    inputfields.style.animation = 'translateX 1s ease'
    loginform.style.display = 'flex';
    registerform.style.display = 'none';
})

registerbtn.addEventListener('click', () => {
    inputfields2.style.animation = 'translateX 1s ease'
    registerform.style.display = 'flex'
    loginform.style.display = 'none'

})


</script>



</body>
</html>