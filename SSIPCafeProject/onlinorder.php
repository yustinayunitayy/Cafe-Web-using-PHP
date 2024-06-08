<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $order = $_POST['order_name'];
    $note = $_POST['note'];

    // Prepare and execute query
    $stmt = $conn->prepare("INSERT INTO online_orders (name, contact, address, order_name, note) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $contact, $address, $order, $note);

    if ($stmt->execute()) {
        echo "<script>alert('Your order is complete, please wait for the next information that will be send to your number~!!')</script>";
    } else {
        echo "<script>alert('Error, Please try again!')</script>";
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Moon Cafe</title>
</head>
<body>
    <div class="containerbody">
        <form action="" method="POST" class="login-email">
            <?php echo "<p>This is Online Order Service, " . $_SESSION['username'] ."!". "</p>"; ?>
            <div class="judul">
            <h1 align="center">  ⋆˖⁺‧₊☽ MOON CAFE ☾₊‧⁺˖⋆</h1>
            <h3 align="center"> Lovely and Peaceful place just for you~!</h3>
            </div>

            <nav id="navigation">
                <div class="input-group">
                <ul>
                    <li><a href="afterlogin.php">Home</a></li>
                    <li><a href="menulist.php">Menu</a></li>
                    <li><a href="bookingseat.php">Booking</a></li>
                    <li><a href="onlinorder.php">Online Order</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            
            <br><br>
                
            <h1 align="center">✎ Online Order Form ༉‧♡</h1>
            <h3 align="center">• Guide How Online Order Form Works : •</h1>
            <ol>
                <li> Please input the data that required in the form below. </li>
                <li> After succeed, please wait for the next information that we will provide via message / whatsapp regards the detail order and the payment method </li>
                <li> Then after you pay, you may wait for your order arrived in front of your place </li>
            </ol>   
            
            <br><br><br><br>

            <h1 align="center">• Order Form •</h1>
            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <br><br>

            <div class="input-group">
                <label for="contact">Active Contact Number:</label>
                <input type="text" id="contact" name="contact" required>
            </div>

            <br><br>


            <div class="input-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>

            <br><br>

            
            <div class="input-group">
                <label for="order_name">Order:</label> 
                <input type="text" id="order_name" name="order_name" required>
            </div>
            
            <br><br>
            
            <div class="input-group">
                <label for="note">Note:</label>
                <input type="text" id="note" name="note" required>
            </div>
            
            <br><br>
            
            <div class="input-group">
                <button type="submit" class="btn">Submit Order</button><br>
                <button type="reset" class="btn">Reset Order</button>
            </div>

            <br><br><br><br>

            <ol>
                    <h3>Contact Us:</h3>
                    <p>Tel: +62 851 2345 6789</p>
                    <p>Email: mooncafe@gmail.com</p>
                    <a href="logout.php">Logout</a>
            </ol>
        </form>
    </div>
</body>
</html>
