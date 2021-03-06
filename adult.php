<?php

$servername ="localhost";
$username ="root";
$password="";
$con = new mysqli($servername, $username, $password,"youtubeuserdata");

if ($con->connect_error)
    die("Connection error" . $con->connect_error);


$sql = "SELECT * FROM products where ID = '10'";
$result = $con->query($sql);
$sql2 = "SELECT * FROM products where ID ='11'";
$result2 = $con->query($sql2);
$sql3 = "SELECT * FROM products where ID ='12'";
$result3 = $con->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <header>
        <a class="logo" href="index.html">BookWorms</a>
        <ul>
            <li><a class="active" href="products.php">store</a></li>
            <li><a href="about.html">about us</a></li>
            <li><a href="contact.html">contact us</a></li>
        </ul>
    </header>

    <div class="wrapper">
        <div class="vertical_nav">

            <ul>
                <li><a href="products.php">All</a></li>
                <li><a href="kids.php">Kids</a></li>
                <li><a href="young_adult.php">Adolescents</a></li>
                <li><a class="active" href="adult.php">Adults</a></li>
            </ul>


        </div>


        <div class="store">
            <h2 class="text">Adults</h2>
            <section class="section_store">

                <div class="cards">
                    <div class="card">
                        <img src="images/rom.jpg" alt="">
                        <?php
                        while ($row = $result->fetch_assoc()) :
                        ?>
                        <p><?= $row["type"] ?> </p>
                        <h3><?= $row["price"] ?></h3>
                        <?php
                        endwhile;
                        ?>
                        <input type=button onClick="parent.location='subscribe.html'"
                        value='subscribe'>
                    </div>


                </div>
                <div class="cards">
                    <div class="card">
                        <img src="images/my5.jpg" alt="">
                        <?php
                        while ($row = $result2->fetch_assoc()) :
                        ?>
                        <p><?= $row["type"] ?> </p>
                        <h3><?= $row["price"] ?></h3>
                        <?php
                         endwhile;
                         ?>
                        <input type=button onClick="parent.location='subscribe.html'"
                        value='subscribe'>
                    </div>


                </div>
                <div class="cards">
                    <div class="card">
                        <img src="images/sh2.jpg" alt="">
                        <?php
                        while ($row = $result3->fetch_assoc()) :
                        ?>
                        <p><?= $row["type"] ?> </p>
                        <h3><?= $row["price"] ?></h3>
                        <?php
                         endwhile;
                         ?>
                        <input type=button onClick="parent.location='subscribe.html'"
                        value='subscribe'>
                    </div>
                </div>
            </section>
        </div>
        <footer>
            <p>@BookWorms</p>

        </footer>
    </div>
</body>

</html>

<?php
$con->close();
?>