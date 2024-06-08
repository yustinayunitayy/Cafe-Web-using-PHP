<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $quantity = $_POST['quantity'];
    $note = $_POST['note'];

    // Check which checkbox is selected and set $bsr accordingly
    if (isset($_POST['seat'])) {
        $bsr = 'seat';
    } elseif (isset($_POST['room'])) {
        $bsr = 'room';
    } else {
        $bsr = '';
    }

    // Prepare and execute query
    $stmt = $conn->prepare("INSERT INTO booking_seatroom (name, contact, bsr, quantity, note) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $contact, $bsr, $quantity, $note);

    if ($stmt->execute()) {
        echo "<script>alert('Your book is complete, please wait for the next information that will be send to your number~!!')</script>";
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
            <?php echo "<p>This is Booking Seat Service, " . $_SESSION['username'] ."!". "</p>"; ?>
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
                
            <h1 align="center">✧༺ Booking Seat / Room Form ༻∞</h1>
            <h3 align="center">• Guide How to Book a Seat or a Room in Moon Cafe: •</h1>
            <ol>
                <li> Please input the data that required in the form below. </li>
                <li> After succeed, please wait for the next information that we will provide via message / whatsapp regards the detail booking and the payment method </li>
                <li> Then after you pay, you may visit us on the schedule that you already book~!  </li>
            </ol>   
            
            <br><br><br><br>

            <h1 align="center">ꕥ Booking Form ꕥ</h1>
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
                <label for="bsr">Book a seat / room?</label> <br>
                <input type="checkbox" id="bsr" name="seat" >Seat</br>
                <input type="checkbox" id="bsr" name="room" >Room</br>
            </div>

            <br><br>

            
            <div class="input-group">
                <label for="quantity">For how many people ?</label> 
                <input type="number" id="quantity" name="quantity" required>
            </div>
            
            <br><br>
            
            <div class="input-group">
                <label for="note">Note:</label>
                <input type="text" id="note" name="note" required>
            </div>
            
            <br><br>
            
            <div class="input-group">
                <button type="submit" class="btn">Book</button><br>
                <button type="reset" class="btn">Reset</button>
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
