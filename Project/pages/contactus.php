<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/alertstyles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Contacts</title>
</head>
<body>
    <?php include "../pages/navbar.php"; ?>
    <section class="contactpage">
        <div class="content">
            <h2>Contact Us</h2>
            <p>We really love to hear your feedback, it help us improve!</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                    <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>L1045 M.Aquino st., <br> Tandangsora, Quezon city, <br> Philippines <br> 1116</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>agshards@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="text">
                        <h3>Contact #</h3>
                        <p>0995-233-2528</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="" method="post">
                    <h2>Send us Message</h2>
                    <div class="inputbox">
                        <label for="userName">Full name:</label>
                        <input type="text" name="userName" required>
                    </div>
                    <div class="inputbox">
                        <label for="userName">Email:</label>
                        <input type="text" name="email" required>
                    </div>
                    <div class="inputbox">
                        <label for="userName">Message:</label>
                        <textarea name="message" id="message" required></textarea>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="" value="Send">
                    </div>
                </form>
            </div>
        </div>
        
                <span><?php include "../backEnd/feedback.php"; ?></span>
    </section>
</body>
</html>