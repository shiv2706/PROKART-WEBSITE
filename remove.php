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
            <li><a href="sign.php">Log-in</a> </li>
            <li><a href="shop.html">Shop</a> </li>
            <li><a href="about.html">About</a> </li>
            <li><a href="cart.html#last">Contact</a> </li>
            <li><a class="active"  href="cart.html">Cart 🛒</a> </li>

        </ul>
    </div>
</section>
<section id="cart" class="section-p1">
    <table width="100%">
        <tr>
            <th>ProductName</th>
            <th>Price($)</th>
            <th>Quantity</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "shiv1234", "prokart");
        if ($conn->connect_error){
            die("connection failed: ". $conn->connect_error);
        }
        $sql = "SELECT ProductName, Price$, Quantity from cart";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>". $row["ProductName"] ."</td><td>". $row["Price$"] ."</td><td>". $row["Quantity"] ."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "";
        }
        $conn->close();
        ?>
    </table>
</section>
<div class="form-container1">
    <div class="loginform">
        <div class="feilds">
            <h4>Remove-Items From Cart</h4>
            <form action="delete.php" method="post">
                <div class="input-box">
                    <span class="icon">🛍️</span>
                    <input list="products" name="ProductName">
                    <datalist id="products">
                        <option value="Printed men's Shirt">
                        <option value="Floral Design Shirt">
                        <option value="Designer Style Shirt">
                        <option value="Printed men's Shirt">
                        <option value="Party Shirt">
                        <option value="Layered Shirt">
                        <option value="Loose fit Pants">
                        <option value="women's Printed Top">
                    </datalist>
                    <label> select product to remove</label>
                </div>
                <button type="submit" class="btn">Remove</button>
            </form>
        </div>
    </div>
</div>
<div class="cart-empty">
    <a href="index.html"><button class="normal2">HOME</button> </a>
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
        <a href="sign.php">Sign In</a>
        <a href="#">View Cart</a>
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
</body>

</html>
