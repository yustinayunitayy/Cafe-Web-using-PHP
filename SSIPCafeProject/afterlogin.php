<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location:login.php");
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
            <?php echo "<p>Welcome, " . $_SESSION['username'] ."!". "</p>"; ?>
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

                <h2 align="center">˗ˏˋ Our Best Seller ´ˎ˗</h2>

            <br><br>
            
                <img src="menu/mainpage/sm.jpg" width="100%" class="center">
                <h2 align="center" class="second-txt"> Strawberry Milk </h2>
                <p align="center"> Strawberry Milk, a combination of fresh strawberries with milk makes the taste sweet and fresh. </p>

                <div class="input-group">
                    <a href="menulist.php" class="btn" style="margin-left: 40%;">See Other Drinks</a>
                </div>

            <br><br>

                <img src="menu/mainpage/hll.jpg" width="100%" class="center">
                <h2 align="center"> Honey Lavender Latte </h2>
                <p align="center"> Iced Honey Lavender Latte is sure to become the new go-to hot-weather coffee drink! It's slightly sweet, floral, and totally comforting. </p>

                <div class="input-group">
                    <a href="menulist.php" class="btn" style="margin-left: 40%;">See Other Drinks</a>
                </div>

            <br><br>

                <img src="menu/mainpage/rvvc.jpeg" width="100%" class="center">
                <h2 align="center"> Red Velvet Cheese Cake </h2>
                <p align="center">Red velvet cake is made with a soft sensation accompanied by a sweet taste</p>

                <div class="input-group">
                    <a href="menulist.php" class="btn" style="margin-left: 40%;">See Other Dessert</a>
                </div>

            <br><br>
                <h1 align="center"> ฅ Our Services ฅ</h1>
            
                <table style="width:100%">
                    <tr align="center">
                        <td colspan="8"> <a href="bookingseat.php"> <img src="logo/bse.png" width="50%"> </a></td>
                        <td> <a href="onlinorder.php"> <img src="logo/oor.png" width="50%"> </a> </td>
                    </tr>

                </table>

            <br><br>

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