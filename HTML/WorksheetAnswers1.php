<?php

    $connString = "mysql:host=localhost;dbname=Users";
    $user = "CAOA";
    $password = "CAOA2020!";

    $pdo = new PDO($connString,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    session_start();
    
    if(empty($_SESSION['users']))
    {
        header("Location: LoginPage.php");
        die("Redirecting to LoginPage.php");
    }
    
    $student = $_GET['student'];
    
    $studentName = explode("_", $student);
    
    $worksheet = "Worksheet $studentName[2] Answers";
    
    try {
    $sql = "SELECT * FROM `$worksheet` WHERE `First Name` = '$studentName[1]' and `Last Name` = '$studentName[0]'";
    $q = $pdo->query($sql);
    
    
    } catch (PDOException $e) {
        die("Could not connect to the database Users :" . $e->getMessage());
    }
    

    while ($row = $q->fetch()): 
?>

<html>
    <head>
        <title>Student Answers</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
<body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Goals</h2>

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
        
            <label for="q1">What are your financial (current cost of living vs future cost of living, 
                savings account, checking account, retirement account) goals?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 1 -1']); ?> </p>
             
            <label for="q2">What are personal health (eating, working out, resting, vacations) goals?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 1 -2']); ?> </p>
             
            <label for="q3">What are your personal development (reading books, learning a new language, going on a trip) goals?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 1 -3']); ?> </p>
             
            <label for="q4">What are your relationship (family, social, friends) goals?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 1 -4']); ?> </p>
             
            <label for="q5">What are your spiritual (church, read the bible, start book study) goals?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 1 -5']); ?> </p>
             
            <label for="q6">What are your career (professional development, get a degree, ask for a promotion, change jobs, learn more about your current job) goals?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 1 -6']); ?> </p>
             
            <label for="q7">Put them in order from 1 to 6 and then start defining what they mean to you.<br>
                In the order of your goals, please write a paragraph about each goal and answer these questions:<br>
                What is your goal in five years?
                What is your goal in one year?
                What can you start today or this week to start achieving that goal?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 1 -7']); ?> </p>



        
        <h2>This is your life! What do you want to accomplish!
            When you put it on paper, on your calendar, and you want to do it... YOU WILL!!!</h2>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>