<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
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
            <?php echo "<p>Here is the menu list, " . $_SESSION['username'] ."!". "</p>"; ?>
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
                <h1 align="center">˚·⑅◛ Our Lovely Menu ◛⑅·˚</h1>
            <br>
                <h2 align="center">❝ Coffee & Drinks ❞</h2>
            <br>

                <table style="width:100%">
                    <tr align="center">
                        <th> <img src="menu/drink/a.jpg" width="200px"> </th>
                        <th> <img src="menu/drink/espreso.jpg" width="200px"> </th>
                        <th> <img src="menu/drink/Cappuccino.jpg" width="200px"> </th>
                        <th> <img src="menu/drink/affogato.jpg" width="200px"> </th>
                        <th> <img src="menu/drink/lc.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/ll.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/lm.jfif"width="200px"> </th>


                    </tr>
                    <tr align="center">
                        <td align="center"> Americano IDR 22k </td>
                        <td align="center"> Espresso IDR 24k</td>
                        <td align="center"> Cappuccino IDR 25k</td>
                        <td align="center"> Affogato IDR 30k</td>
                        <td align="center"> Caramel Latte IDR 28k</td>
                        <td align="center"> Honey Lavender Latte IDR 28k</td>
                        <td align="center"> Matcha Latte IDR2 5k</td>
                        
                    </tr>
                    <tr align="center">
                        <th> <img src="menu/drink/mm.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/sm.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/vm..jpg" width="200px"> </th>
                        <th> <img src="menu/drink/ic.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/tc.jfif"width="200px"> </th>
                        <th> <img src="menu/drink/tg.jfif"width="200px"> </th>
                        <th> <img src="menu/drink/tl.jpeg"width="200px"> </th>
                        
                    </tr>
                    <tr align="center">
                        <td align="center"> Manggo Milkshake IDR 30k</td>
                        <td align="center"> Strawberry Milkshake IDR 30k</td>
                        <td align="center"> Vanilla Milkshake IDR 30k</td>
                        <td align="center"> Ice Chocolate IDR 30k</td>
                        <td align="center"> Chamomile Tea IDR 28k</td>
                        <td align="center"> Green Tea IDR 28k</td>
                        <td align="center"> Lemon Tea IDR 26k</td>
                    </tr>
                    <tr align="center">
                        <th> <img src="menu/drink/st.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/yakly.jpeg"width="200px"> </th>
                        <th> <img src="menu/drink/yaklon.jpg"width="200px"> </th>
                        <th> <img src="menu/drink/yakstra.jpg"width="200px"> </th>
                    </tr>
                    <tr align="center">
                        <td align="center"> Sweet Tea IDR 20k </td>
                        <td align="center"> Yakult Lychee IDR 30k </td>
                        <td align="center"> Yakult Melon IDR 30k </td>
                        <td align="center"> Yakult Strawberry IDR 30k</td>
                    </tr>
                </table>
            <br><br>
                <h2 align="center">❝ Dessert ❞</h2>
            <br>

                <table style="width:100%">
                    <tr align="center">
                        <th> <img src="menu/cakes/bf.png" width="200px"> </th>
                        <th> <img src="menu/cakes/rvvc.jpeg" width="200px"> </th>
                        <th> <img src="menu/cakes/occ.jpg" width="200px"> </th>
                        <th> <img src="menu/cakes/icc.jpg" width="200px"> </th>
                        <th> <img src="menu/cakes/csr.jfif"width="200px"> </th>
                        <th> <img src="menu/cakes/ssr.jpg"width="200px"> </th>
                        <th> <img src="menu/cakes/tiramisu.jpg"width="200px"> </th>


                    </tr>
                    <tr align="center">
                        <td align="center"> Black Forest IDR 40k </td>
                        <td align="center"> Red Velvet Cheese Cake IDR 42k </td>
                        <td align="center"> Oreo Cheese Cake IDR 40k </td>
                        <td align="center"> Ice Cream Cake IDR 45k</td>
                        <td align="center"> Chocolate Swiss Roll IDR 39k</td>
                        <td align="center"> Strawberry Swiss Roll IDR 39k</td>
                        <td align="center"> Tiramisu IDR 39k</td>
                        
                    </tr>
                    <tr align="center">
                        <th> <img src="menu/cakes/chocro.jpg"width="200px"> </th>
                        <th> <img src="menu/cakes/crossaints.jpg"width="200px"> </th>
                        <th> <img src="menu/cakes/crof.jpg" width="200px"> </th>

                    </tr>
                    <tr align="center">
                        <td align="center"> Chocolate Croissant IDR 20k</td>
                        <td align="center"> Croissant IDR 19k </td>
                        <td align="center"> Croffle (Croissant Waffle) IDR 19k </td>
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