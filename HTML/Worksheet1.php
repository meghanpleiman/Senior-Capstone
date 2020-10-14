<?php
    
    session_start();
    
    if(empty($_SESSION['users']))
    {
        header("Location: LoginPage.php");
        die("Redirecting to LoginPage.php");
    }
    
    $User = $_SESSION['users'];
    $Teacher = $_SESSION['teacher'];
    $FirstName = $_SESSION['firstname'];
    
    $connString = "mysql:host=localhost;dbname=Users";
    $user = "CAOA";
    $password = "CAOA2020!";

    $pdo = new PDO($connString,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if(isset($_POST['submit']))
    {
        $textareaValue1 = trim($_POST['q1']);
	    $textareaValue2 = trim($_POST['q2']);
    	$textareaValue3 = trim($_POST['q3']);
    	$textareaValue4 = trim($_POST['q4']);
    	$textareaValue5 = trim($_POST['q5']);
    	$textareaValue6 = trim($_POST['q6']);
    	$textareaValue7 = trim($_POST['q7']);
	    

        $sqlLastName = "SELECT `Last Name` FROM `Login_Users` WHERE `First Name` = '$FirstName'";
        
        $q = $pdo->query($sqlLastName);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        
        $LastName = $row['Last Name'];

        
        $sql = "INSERT INTO `Worksheet 1 Answers`(`First Name`, `Last Name`, `Worksheet 1 -1`, `Worksheet 1 -2`, `Worksheet 1 -3`, `Worksheet 1 -4`, `Worksheet 1 -5`, `Worksheet 1 -6`, `Worksheet 1 -7`, `Teacher`) 
    	       VALUES ('$FirstName', '$LastName', '$textareaValue1', '$textareaValue2', '$textareaValue3', '$textareaValue4', '$textareaValue5', '$textareaValue6', '$textareaValue7', '$Teacher')";
        $result = $pdo->prepare($sql); 
        $result->execute();
        
    }

?>


<html>
    <head>
        <title>CAOA Worksheet 1</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Goals</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
        <p class = "italics">What type of lifestyle do you want?     Did you set goals to achieve it?</p>
        <p>There is considerable evidence to indicate that expectations of your future do, 
            in fact, tend to create your future. People usually end up pretty much where they expect. 
            What are your expectations for you?</p>
        <p>If you do not have a written plan for your life, it may feel like you are driving a car 
            without having your hands on the steering wheel. When you give yourself a destination you 
            will feel better about getting in the car.</p>
        <p>Goals give you a starting point and a destination. You are incharge when working on your 
            goals. In order for your purpose in life to be fulfilled you must set goals!</p>
        <h2>"Believe you can and you're halfway there." - Theodore Roosevelt</h2>
        <h2>Questions</h2><br>
        
        <form action="" method="POST">
            <label for="q1">What are your financial (current cost of living vs future cost of living, 
                savings account, checking account, retirement account) goals?</label><br>
            <textarea id="q1" rows="4" cols="50" name="q1"></textarea><br>
            <label for="q2">What are personal health (eating, working out, resting, vacations) goals?</label><br>
            <textarea id="q2" rows="4" cols="50" name="q2"></textarea><br>
            <label for="q3">What are your personal development (reading books, learning a new language, going on a trip) goals?</label><br>
            <textarea id="q3" rows="4" cols="50" name="q3"></textarea><br>
            <label for="q4">What are your relationship (family, social, friends) goals?</label><br>
            <textarea id="q4" rows="4" cols="50" name="q4"></textarea><br>
            <label for="q5">What are your spiritual (church, read the bible, start book study) goals?</label><br>
            <textarea id="q5" rows="4" cols="50" name="q5"></textarea><br>
            <label for="q6">What are your career (professional development, get a degree, ask for a promotion, change jobs, learn more about your current job) goals?</label><br>
            <textarea id="q6" rows="4" cols="50" name="q6"></textarea><br>
            <label for="q7">Put them in order from 1 to 6 and then start defining what they mean to you.<br>
                In the order of your goals, please write a paragraph about each goal and answer these questions:<br>
                What is your goal in five years?
                What is your goal in one year?
                What can you start today or this week to start achieving that goal?</label><br>
            <textarea id="q7" rows="8" cols="50" name="q7"></textarea><br>
            
            <button onclick="myFunction()" type="submit" style="float:right" name='submit'>Submit</button>

            <script>
                function myFunction() {
                    alert("CAOA Worksheet 1 has been submitted!");
                }
            </script>
            
        </form>

        
        <h2>This is your life! What do you want to accomplish!
            When you put it on paper, on your calendar, and you want to do it... YOU WILL!!!</h2>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>