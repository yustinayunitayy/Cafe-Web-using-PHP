<?php
include 'config.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $feedback = htmlspecialchars($_POST["feedback"]);
    
    // Insert the feedback into the database
    $stmt = $conn->prepare("INSERT INTO feedback (name, email, feedback) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $feedback);
    
    if ($stmt->execute()) {
      echo "<script>alert('Thank you for the feedback')</script>";
    } else {
      echo "Error: " . $stmt->error;
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
            <?php echo "<p>Our Contact information and Feedback space, " . $_SESSION['username'] ."!". "</p>"; ?>
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

                <h2 align="center">✧⋄⋆⋅⋆⋄ Contact ⋄⋆⋅⋆⋄✧</h2>

            <br><br>

                <p align="center">Tel: +62 851 2345 6789</p>
                <p align="center">Email: mooncafe@gmail.com</p>
                <p align="center">Address : blabla street, number, 33 South Jakarta.</p>
            
            <br><br>
            
                <h2 align="center">✧⋄⋆⋅⋆⋄ Feedback ⋄⋆⋅⋆⋄✧</h2>

            <br><br>
            <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
            </div>     
            <div class="input-group">
                    <label for="feedback">Feedback:</label>
                    <textarea type=text id="feedback" name="feedback" required></textarea>
            </div>
            <div class="input-group">
                <button type="submit" class="btn">Submit Feedback</button><br>
                <button type="reset" class="btn">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>