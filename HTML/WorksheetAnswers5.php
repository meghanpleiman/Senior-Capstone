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
        <h2>Budget</h2>
        <p class = "italics">Are you ever short of money?   Do you wish you had more money? 
        Do you know what you are spending your money on?</p>
        <p>Since budgeting allows you to create a spending plan for your money, it ensures that 
        you will always have enough money for the things you need and the things that are 
        important to you. Following a budget or spending plan will also keep you out of debt 
        because you will know where your money is going instead of wondering where it went.</p>
        <p class = "italics">“Too many people spend money they earned..to buy things they
        on't want..to impress people that they don't like.” - Will Rogers</p>
        <p class = "bold">What do you need to create a budget:</p>
        <p>You need to know your income (if you do not have one, get one)
        You need to know your expenses (how much you are spending on what)</p>
        <p>A budget is completed on a monthly basis. If you have a checking and savings account and you 
        either take money out or put money in you want to verify that your budget matches your bank 
        statements.</p>
        <p>Please complete the attached budget based on the previous lesson. Use the amounts from 
        your cost of living form to verify what you will need on a monthly basis to survive on your own 
        and what income you need to earn in your career.</p>
        <h2> “Money never made a man happy yet, nor will it. The more a man
        has, the more he wants.” - Benjamin Franklin</h2>
        <h2>Questions</h2><br>

            <label for="q1">Do you want to work multiple jobs to make your ends meet?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 5 -1']); ?> </p>
             
            <label for="q2"> Do you want to rent or own your own home?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 5 -2']); ?> </p>
             
            <label for="q3">Do you want to be able to have some money to go out with friends?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 5 -3']); ?> </p>
             
            <label for="q4">Do you want to be able to go out and buy shoes and clothes you want?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 5 -4']); ?> </p>
             

        <p class = "bold">Just because you work an 8 hour job does not mean all of your needs 
        will be covered with your income. You need to figure out what you need 
        financially in order to be successful on your own. You need to 
        make sure that the career you choose will help you afford all of your 
        needs and wants!</p>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>