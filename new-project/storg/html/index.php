<?php 
function setActive($name){
    global $pageName;
    if(isset($pageName) && $pageName==$name){
        echo "class='active'";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../image/mah02.jpg">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,400;1,600;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="../css/libs/all.min.css">

    <title>THE WORLD IN EGYPT</title>
</head>

<body>
    <div class="contener">
        <nav>
            <div class="logo">
                <img src="../image/mah02.jpg" alt="">
            </div>
            <div class="icon">
                <ul>
                    <li><a <?php setActive('home')  ?> href="index.php">HOME</a></li>
                    <li><a <?php setActive('about')  ?> href="about.php">ABOUT US</a></li>
                    <li><a <?php setActive('servsis')  ?> href="servsis.php">SERVESIS </a></li>
                    <li><a <?php setActive('contact')  ?> href="contact.php">CONTACT US</a></li>
                    <li><a <?php setActive('laren')  ?> href="laren.php">LAREN ABOUT</a></li>
                </ul>
            </div>
        </nav>
<?php
include('home.php');
?>

