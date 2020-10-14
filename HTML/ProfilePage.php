<?php
    
    session_start();
    
    if(empty($_SESSION['users']))
    {
        header("Location: LoginPage.php");
        die("Redirecting to LoginPage.php");
    }
    
    $users = 'users';
    $Teacher = 'teacher';
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../CSS/ProfilePage.css" />
</head>
<header>
    <h1>Welcome 
    <?php
    
    
    
    echo "$_SESSION[$users]" . "!";
    
    ?>
    
    
    </h1>
</header>

<br>

<div class="tabs">
    <a href="#" onclick="window.location.href = 'ProfilePage.php';">Profile</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'WorksheetPage.php';">Worksheets</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'CareerPathway.php';">Career Pathway</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'VirtualLife.php';">Virtual Life</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'Logout.php';" >Logout</a>
</div>

<br>

<body>
        <div id = character> </div>
        <div id = information>
        <p>First Name:
            <?php
            
            $firstname = 'firstname';
            echo "$_SESSION[$firstname]";
            
            ?>
    
        </p>
        <p>Last Name:
            <?php
            
            $lastname = 'lastname';
            echo "$_SESSION[$lastname]";
            
            ?>
    
        </p>
        
        <p>Teacher:
            <?php
            
            echo "$_SESSION[$Teacher]";
            
            ?>
        </p>
        </div>
        
</body>
</html>