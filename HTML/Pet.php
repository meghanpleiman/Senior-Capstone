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
        <link rel="stylesheet" href="../CSS/Pet.css">
        <link rel="stylesheet" href="../CSS/HeaderCSS.css">
    </head>
    <header>
        <h1>My Pets</h1>
    </header>
    <body>
        <div id = temp> Pets Will Go Here </div>
    </body>
</html>