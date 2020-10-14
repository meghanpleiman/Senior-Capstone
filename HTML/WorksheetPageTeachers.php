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
        <link rel="stylesheet" href="../CSS/Chat.css">
        <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";}

            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }

        </script>
    </head>
    
    <header>
            <h1>Worksheets</h1>
    </header>
        
    <div class="tabs">
            <a href="#" class="tablinks" onclick="window.location.href = 'TeacherProfilePage.php';">Profile</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'WorksheetPageTeachers.php';">Worksheets</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'CareerPathway.php';">Career Pathway</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'HomePage.html';">Logout</a>
            
    </div>
        
    <body>
        <img src = "../Images/Street.png">
        <button class = "TypeOne" id = "btnone"><a href = "../HTML/Pretest.php">Pretest</a></button>
        <button onClick="worksheet1" class = "TypeTwo" id = "btntwo"><a href = "../HTML/Worksheet1.php">Worksheet 1</a></button>
        <button class = "TypeThree" id = "btnthree"><a href = "../HTML/Worksheet2.php">Worksheet 2</a></button>
        <button class = "TypeFour" id = "btnfour" LINK="111111"><a href = "../HTML/Worksheet3.php">Worksheet 3</a></button>
        <button class = "TypeThree" id = "btnfive"><a href = "../HTML/Worksheet4.php">Worksheet 4</a></button>
        <button class = "TypeTwo" id = "btnsix"><a href = "../HTML/Worksheet5.php">Worksheet 5</a></button>
        <button class = "TypeOne" id = "btnseven"><a href = "../HTML/Worksheet6.php">Worksheet 6</a></button>
        <button class = "TypeTwo" id = "btneight"><a href = "../HTML/Worksheet7.php">Worksheet 7</a></button>
        <button class = "TypeThree" id = "btnnine"><a href = "../HTML/Worksheet8.php">Worksheet 8</a></button>
        <button class = "TypeFour" id = "btnten"><a href = "../HTML/Worksheet9.php">Worksheet 9</a></button>
        <button id="popup" onclick="openForm()">Chat</button>
        <div class="chat-popup" id="myForm" style = "display:none">
            <form action="post" class="form-container">
                <label for="msg"><b>Message</b></label>
                <textarea placeholder="Type message.." name="msg" required></textarea>
                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>

    </body>
</html>