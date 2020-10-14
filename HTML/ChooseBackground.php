<?php
    
    session_start();
    include("Session.php");

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Choose Background</title>
        <link rel="stylesheet" href="../CSS/chooseBackground.css" />
        <link rel="stylesheet" href="../CSS/HeaderCSS.css" />
    </head>
    <header>
        <h1>Career Analysis Academy</h1>
    </header>
    <body>
        
        <title>Choose Background</title>
        <div id = "container">
            <form action="BuildCharacter.html">
                <p>Where do you see yourself living in the future?</p>
                <input type="submit" value="Country"/>
            </form>
            <form action="CityPage.html">
                <input type="submit" value="City"/>
            </form>
            <form action="SuburbsPage.html">
                <input type="submit" value="Suburbs"/>
            </form>
        </div>
    </body>

</html>
