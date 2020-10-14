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
        <h2>Time Management & Being Organized</h2>
        <p class = "italics">“Time is what we want most, but what we use worst.” - William Penn</p>
        <p>“Time management” is the process of organizing and planning how to divide your time between 
        specific activities. Good time management enables you to work smarter – not harder – so that you 
        get more done in less time, even when time is tight and pressures are high. Failing to manage your
        time damages your effectiveness and causes stress.
        </p>
        <p class = "bold">Good time management requires an important shift in focus from activities to
            results: being busy isn’t the same as being effective.</p>
        <p class = "italics">“Nothing is a waste of time if you use the experience wisely.” — Rodin
        </p>
        <h2></h2>
        <h2>Questions</h2>
        <p>Now it is time for you to create a process of organizing and planning how much time you spend 
        on specific activities.</p>
        <p>1) Please complete the Time Management worksheet and monitor how you spend your 
        time on a weekly basis.</p>
        <p>2) Make note of any wasted time.</p>
        <p>3) Prioritize your schedule but put important things first! Yes you can have room for
        fun things too! Balance...</p>
        <p>4) Remembering completing your goals during the first lesson? Please input those
        goals into your new Time Management worksheet (especially priorities that you listed as 
        1-3 should be on there.)</p>
        <p>It helps you to give your time where it's most-needed and most wisely spent, freeing you 
        from less important tasks that can be attended to later... or maybe you realized it was such 
        a waste of your time that you are not going to do it at all! With effective time management, 
        you can take control of your time and get on top of your to-do list.</p><br>
        <h2>Prioritization * Scheduling * Focus * Fun *</h2>
        <p class = "italics">“Time = life; therefore, waste your time and waste of your life, or 
        master your time and master your life.” - Alan Lakein</p>
        <h2>CAN YOU GET YESTERDAY BACK? NO<br> 
        THIS IS YOUR LIFE, YOUR TIME,<br> 
        HOW ARE YOU GOING TO SPEND IT?</h2>
        <p class = "bold">How does being organized help with time management?<br><br>
        Have you ever looked for something you couldn’t find? Maybe something in your room? Did that 
        take time?<br><br>You can increase your productivity. By keeping organized, you will save time looking 
        for things and will have more time to work on important tasks or even enjoy some time having fun!<br><br>
        You can reduce your stress level. When you need something you know exactly where it is so you will
        not be stressed out looking for it. This translates to school and work. Is your teacher/manager 
        asking you to locate a document from last month? If things are organized and labelled neatly, 
        tracking this down should be a piece of cake, rather than a source of stress!<br><br> You can be on time –
        consistently. Organization and punctuality go hand-in-hand. Consider setting calendar alerts, 
        for example, to ensure you do not get too caught up in a task and lose track of time. Impress your 
        teacher/manager – be prompt and show up on time.<br><br> You can ensure you meet deadlines. When task 
        after task begins to pile up, it isn’t too hard to forget one small, yet important task. Don’t 
        miss an important deadline on a project because you got sidetracked with another urgent item. Set 
        calendar alerts so you will never miss a deadline again – or better yet, surprise your 
        teacher/manager and complete your task ahead of schedule. You do not have to wait until the last 
        minute.<br><br> 

            <label for = "q1"> Organization starts with your room. Please submit a photo of your organized room or any 
            room you would like to share.</label><br>
            
            <ol>
            <?php
            $fileSQL = $pdo->prepare("SELECT * FROM `Worksheet 2 Answers`");
            $fileSQL->execute();
            while($row = $fileSQL->fetch()){
                echo "<li><a href='ViewFile.php?Worksheet=2&FileName=".$row['FileName']."' target='_blank'>".$row['FileName']."</a></li>";
            }
            
            
            ?>
            </ol>

        <p class = "italics">“If it doesn't have a place and it is important, find a place for it, otherwise you will not 
        find it when you need it” - Jerzey Kolodziej<p><br>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>