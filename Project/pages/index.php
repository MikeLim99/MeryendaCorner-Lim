<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meryenda Corner</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="indexContent">
    
    <?php include "../pages/navbar.php"; ?>
    <div id="showcase">
        <div class="main-section">
            <img src="../assets/burger.png" alt="" id="frame-1">
            <img src="../assets/Frame2.png" alt="" id="frame-2">
        </div>
        <div class="socIcons">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-facebook" style="color: #FFE31A;"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram" style="color: #FFE31A;"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube" style="color: #FFE31A;"></i></a></li>
                </ul>
            </div>
    </div>

    <section id="Menu-section">
        <div class="central-div">
            <h2>Best sellers!</h2>
        </div>
        
        <div class="cardContainer">
            <div class="card">
                <div class="productImg">
                    <div class="product">
                        <img src="../assets/1.jpg" alt="">
                    </div>
                    <div class="productTitle">
                        <span>Quarter-Pounder</span>
                    </div>
                </div>
                
                <div class="productDesc">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                </div>
                <div class="productPrice">
                    <span>₱50.00</span>
                </div>
            </div>
            <div class="card">
                <div class="productImg">
                    <div class="product">
                        <img src="../assets/cheeseburger.jpg" alt="">
                    </div>
                    <div class="productTitle">
                        <span>Cheesy-Burger</span>
                    </div>
                </div>
                
                <div class="productDesc">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                </div>
                <div class="productPrice">
                    <span>₱26.00</span>
                </div>
            </div>
            <div class="card">
                <div class="productImg">
                    <div class="product">
                        <img src="../assets/cheeseburger_with_egg.jpeg" alt="">
                    </div>
                    <div class="productTitle">
                        <span>Overload</span>
                    </div>
                </div>
                
                <div class="productDesc">
                    <p>Lorem Ipsum is simply dummy text of the printing and typ Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                </div>
                <div class="productPrice">
                    <span>₱36.00</span>
                </div>
            </div>
            <div class="card">
                <div class="productImg">
                    <div class="product">
                        <img src="../assets/friednoodles.jpg" alt="">
                    </div>
                    <div class="productTitle">
                        <span>Fried Noodles</span>
                    </div>
                </div>
                
                <div class="productDesc">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown </p>
                </div>
                <div class="productPrice">
                    <span>₱40.00</span>
                </div>
            </div>
            
        </div>
    </section>
    <section id="customizedOrder">
        <div class="central-div">
            <h2>Make your customized order</h2>
        </div>
        <class class="orderForm">
            <form action="../backEnd/orders.php" method="post" id="orderForm" class="indexform">
                <div class="information">
                    <h3>Please fill up the form</h3>
                </div>
                <div class="info">
                    <div class="inputfield">
                        <input type="text" name="name" id="name" required>
                        <span>Name :</span>
                    </div>
                    <div class="inputfield">
                        <input type="email" name="email" id="email" required>
                        <span>Email :</span>
                    </div>
                    <div class="inputfield">
                        <input type="text" name="contactNumber" id="contactNumber" pattern="[9]{1}[0-9]{9}" required>
                        <span>Contact number :</span>
                    </div>
                </div>
                <div class="information">
                    <h3>Choose from the menu</h3>
                </div>
                <div class="lists">
                    <div class="MenuList">
                        <input type="radio" name="menuName" id="QuarterPounder" value="QuarterPounder">
                        <div class="radioTile">
                            <img src="../assets/1.jpg" alt="">
                            <label for="QuarterPounder" class="MenuListIcons">Quarter-Pounder</label>
                            <label for="price">₱50.00</label>
                        </div>
                    </div>
                    <div class="MenuList">
                        <input type="radio" name="menuName" id="Overload" value="Overload">
                        <div class="radioTile">
                            <img src="../assets/cheeseburger_with_egg.jpeg" alt="">
                            <label for="Quarter-Pounder" class="MenuListIcons">Overload</label>
                            <label for="price">₱36.00</label>
                        </div>
                    </div>
                    <div class="MenuList">
                        <input type="radio" name="menuName" id="Cheeseburger" value="Cheeseburger">
                        <div class="radioTile">
                            <img src="../assets/cheeseburger.jpg" alt="">
                            <label for="Cheeseburger" class="MenuListIcons">Cheese-burger</label>
                            <label for="price">₱26.00</label>
                        </div>
                    </div>
                    <div class="MenuList">
                        <input type="radio" name="menuName" id="Friednoodles" value="Friednoodles">
                        <div class="radioTile">
                            <img src="../assets/friednoodles.jpg" alt="">
                            <label for="Friednoodles" class="MenuListIcons">Fried noodles</label>
                            <label for="price">₱40.00</label>
                        </div>
                    </div>
                </div>
                <div class="information">
                    <h3>Choose your sides</h3>
                </div>
                <div class="sides lists">
                    <div class="sideLists">
                        <input type="checkbox" name="sideName[]" id="Fries" value="Fries">
                        <label for="">Fries ₱15.00</label>
                    </div>
                    <div class="sideLists">
                        <input type="checkbox" name="sideName[]" id="KwekKwek" value="KwekKwek">
                        <label for="">Kwek Kwek ₱20.00</label>
                    </div>
                    <div class="sideLists">
                        <input type="checkbox" name="sideName[]" id="Squidballs" value="Squidballs">
                        <label for="Squidballs">Squid balls ₱10.00</label>
                    </div>
                    <div class="sideLists">
                        <input type="checkbox" name="sideName[]" id="Fishballs" value="Fishballs">
                        <label for="">Fish balls ₱10.00</label>
                    </div>
                    <div class="sideLists">
                        <input type="checkbox" name="sideName[]" id="Kikiam" value="Kikiam">
                        <label for="Kikiam">Kikiam ₱10.00</label>
                    </div>
                    <div class="sideLists">
                        <input type="checkbox" name="sideName[]" id="Veggieballs" value="Veggieballs">
                        <label for="Veggieballs">Veggie balls ₱5.00</label>
                    </div>
                </div>
                <div class="btns">
                    <button class="checkData"><a href="../pages/viewOrder.php">Check Order</a></button>
                    <button class="submitBtn" name="action" value="addOrder">Submit</button>
                    <button class="clearBtn" onclick="clearFrom()" value="Reset form">Clear selection</button>
                </div>
            </form>
            

            
        </div>
    </section>
    <?php include "../pages/footer.php"; ?>
    </div>
    <script>
        function clearFrom(){
            document.getElementById('orderForm').reset();
        }
    
    </script>
</body>
</html>