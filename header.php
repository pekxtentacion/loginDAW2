<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Inicio</title>
</head>
<body>
    <nav>
        <a class="aHeader" href="index.php">DAW2</a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php
                if(isset($_SESSION["userUid"])){
                    echo '<li><a href="profile.php">Profile</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
                }else{
                    echo '<li><a href="signup.php">Sign up</a></li>';
                    echo '<li><a href="login.php">Log in</a></li>';
                }
            ?>
        </ul>
    </nav>