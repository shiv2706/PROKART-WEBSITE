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
            <li><a href="emptycart.html#last">Contact</a> </li>
            <li><a href="cart.php">Cart 🛒</a> </li>

        </ul>
    </div>
</section>
<section class="section-p1">
    <?php
    $ProductName = $_POST['ProductName'];
    $Price = $_POST['Price'];
    $Quantity = $_POST['Quantity'];

    $conn = mysqli_connect("localhost", "root", "shiv1234", "prokart");
    if ($conn->connect_error){
        die("connection failed: ". $conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into cart (ProductName, Price$, Quantity) values (?,?,?)");
        $stmt->bind_param("sii",  $ProductName,$Price, $Quantity);
        $stmt->execute();
        $stmt->close();
        $conn->close();


    }
    ?>
</section>
<section id="first" class="section-p1">
    <h2>Product Added To Cart🛒</h2>
    <p><a href="cart.php"><button class="normal2">Go-To-Cart</button></a></p>
    <p><a href="index.html"><button class="normal2">HOME</button> </a></p>


</section>


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





<script src="script.js"></script>
</body>

</html>
