<?php
    
    session_start();
    
    if(empty($_SESSION['users']))
    {
        header("Location: LoginPage.php");
        die("Redirecting to LoginPage.php");
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Virtual Life</title>
        <link rel="stylesheet" href="../CSS/Shirt.css">
        <link rel="stylesheet" href="../CSS/HeaderCSS.css">
    </head>
    <header>
        <h1>My Closet—Shirt</h1>
    </header>
    <body>
        <div>
        <p class=pickColor>Pick a shirt color</p>
        <p><button class="dot1Shirt"></button>
        <button class="dot2Shirt"></button>
        <button class="dot3Shirt"></button>
        <button class="dot4Shirt"></button>
        <button class="dot5Shirt"></button>
        <input type="color" class="dot6" name="favcolor" value="#000000">
        </p>
        
        
        <?php 
        {
        ?>
            <form action="VirtualLife.php">
            <input type="submit" value="NEXT"/>
            </form>
            <?php
            }
            ?>
        </div>
        
    </body>
</html>