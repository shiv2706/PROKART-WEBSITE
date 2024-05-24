<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Site for Latest Fashion </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" href="logo2.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section id="header">
    <a href="index.html"><img src="newl.png" ></a>

    <div>
        <ul id="navbar">
            <li><a href="index.html">Home</a> </li>
            <li><a class="active" href="sign.php">Log-in</a> </li>
            <li><a href="shop.html">Shop</a> </li>
            <li><a href="about.html">About</a> </li>
            <li><a href="sign.php#last">Contact</a> </li>
            <li><a href="cart.php">Cart 🛒</a> </li>

        </ul>
    </div>
</section>
<div class="form-container1">
    <div class="loginform">
        <div class="feilds">
            <h4>Select Quantity</h4>
            <form action="carttable.php" method="post" >
                <div class="input-box">
                    <span class="icon">🛍️️</span>
                    <input type="text" value="Loose fit Pants" name="ProductName" required>
                    <label>ProductName</label>
                </div>
                <div class="input-box">
                    <span class="icon">💲</span>
                    <input type="text" value="75" name="Price" required >
                    <label>Price ($)</label>
                </div>
                <div class="input-box">
                    <span class="icon"></span>
                    <input type="number" name="Quantity" required>
                    <label>Select Quantity</label>
                </div>
                <button type="submit" class="btn">Confirm</button>
            </form>
        </div>
    </div>
    <div class="pro">
        <img src="f7.jpg" alt="">
        <div class="des">
            <span> Levi's</span>
            <h5>Loose fit Pants</h5>
            <div class="star">
                <p>⭐⭐⭐⭐⭐</p>
            </div>
            <h4>$75</h4>
        </div>
    </div>
</div>
<div class="cart-empty">
    <a href="shop.html"><button class="normal2">BACK⬅️</button> </a>
</div>
<div>
    <p><hr></p>
</div>
<section id="last" class="section-p1">
    <div class="col">
        <img class="logo" src="newl.png" alt="">
        <h4>Contact us :</h4>
        <p><strong>Address:</strong>Manipal University Jaipur, Dehmi Kalan, Bagru</p>
        <p><strong>Phone:</strong>+91 8800799205</p>
        <p><strong>Email:</strong>shivansh4858@gmail.com</p>
        <p><strong>Hours:</strong>10:00 - 18:00, Mon - Sat</p>
    </div>
    <div class="col">
        <h4>About</h4>
        <a href="about.html">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Contact us</a>
    </div>
    <div class="col">
        <h4>My Account</h4>
        <a href="sign.html">Sign In</a>
        <a href="cart.php">View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track Order</a>
        <a href="#">Help</a>
    </div>
</section>
<footer class="section-p1">
    <div class="copyright">
        <p>© 2024, Shivansh Pradhan, Manipal University Jaipur. </p>
    </div>
</footer>





<script src="script.js"></script>
</body>

</html>
