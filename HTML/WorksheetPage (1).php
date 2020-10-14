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
        <title>Worksheets</title>
        <link rel="stylesheet" href="../CSS/WorksheetPage.css">
        <link rel="stylesheet" href="../CSS/HeaderCSS.css">
    </head>
    
    <header>
            <h1>Worksheets</h1>
    </header>
        
    <div class="tabs">
            <a href="#" class="tablinks" onclick="window.location.href = 'ProfilePage.php';">Profile</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'WorksheetPage.php';">Worksheets</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'VirtualLife.php';">Virtual Life</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'HomePage.html';">Logout</a>
    </div>
        
    <body>
        
        <button class = "TypeOne" id = "btnone"><a href = "../Worksheets/CAOA Pretest.pdf" target = "_blank">Pretest</a></button>
        <button class = "TypeTwo" id = "btntwo"><a href = "../HTML/Worksheet1.php" target = "_blank">Worksheet 1</a></button>
        <button class = "TypeThree" id = "btnthree"><a href = "../Worksheets/CAOA Lesson 2.pdf" target = "_blank">Worksheet 2</a></button>
        <button class = "TypeFour" id = "btnfour"><a href = "../Worksheets/CAOA Lesson 3.pdf" target = "_blank">Worksheet 3</a></button>
        <button class = "TypeThree" id = "btnfive"><a href = "../Worksheets/CAOA Lesson 4.pdf" target = "_blank">Worksheet 4</a></button>
        <button class = "TypeTwo" id = "btnsix"><a href = "../Worksheets/CAOA Lesson 5.pdf" target = "_blank">Worksheet 5</a></button>
        <button class = "TypeOne" id = "btnseven"><a href = "../Worksheets/CAOA Lesson 6.pdf" target = "_blank">Worksheet 6</a></button>
        <button class = "TypeTwo" id = "btneight"><a href = "../Worksheets/CAOA Lesson 7.pdf" target = "_blank">Worksheet 7</a></button>
        <button class = "TypeThree" id = "btnnine"><a href = "../Worksheets/CAOA Lesson 8.pdf" target = "_blank">Worksheet 8</a></button>
        <button class = "TypeFour" id = "btnten"><a href = "../Worksheets/CAOA Lesson 9.pdf" target = "_blank">Worksheet 9</a></button>
        <button class = "TypeOne" id = "btneleven"><a href = "../Worksheets/CAOA Lesson 10.pdf" target = "_blank">Worksheet 10</a></button>
        <button class = "TypeOne" id = "btntwelve"><a href = "../Worksheets/CAOA Lesson 11.pdf" target = "_blank">Worksheet 11</a></button>
        <button class = "TypeOne" id = "btnthirteen"><a href = "../Worksheets/CAOA Pretest.pdf" target = "_blank">Worksheet 12</a></button>

    </body>
</html>