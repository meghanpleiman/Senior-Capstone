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
        <h2>Career Investigation</h2>
        <p class = "bold">"The best way to predict the future is to create it." —Abraham Lincoln</p>
        <p>Career is an occupation for a significant period of a person's life tied to an income. 
        Setting career goals is an integral part of career planning. What do you want to be when you grow up?</p>

            <label for = "q1">What is your career goal? You see a door in front of you and when you walk through 
            that door you will be in your career...what is that career? Write name of career in box:</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -1']); ?> </p>
             

            <p class = "italics">"I want to look back on my career and be proud of my work” —Jon Stewart</p>
            <h2>Please complete these questions:</h2><br>

            <label for="q2">What is your career?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -2']); ?> </p>
             
            <label>Please show me your plan backwards from your career to your point in high school
            today:</label><br>
            <label for="q3">What steps need to be taken, if education is involved, do you need a
            degree/certification?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -3']); ?> </p>
             
            <label for="q4">If yes, what type of degree/certification?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -4']); ?> </p>
             
            <label for="q5">Which schools provide this degree/certification?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -5']); ?> </p>
             
            <label for="q6">How much does it cost?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -6']); ?> </p>
             
            <label for="q7">How long does it take to achieve the degree/certification?</label><br>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -7']); ?> </p>
             

        <p class = "bold">****WARNING****WARNING****WARNING****WARNING
        COLLEGES DO NOT CARE IF YOU GRADUATE!!!
        THEY GET THEIR $$$ ON DAY ONE!!! THEY WILL NOT
        HELP YOU PAY YOUR STUDENT LOANS AND THEY
        WILL NOT GUARANTEE YOU A JOB SO MAKE SURE
        BEFORE YOU SIGN THAT STUDENT LOAN FORM OR
        ACCEPT THE COLLEGE CLASSES YOU KNOW HOW
        MUCH $$$ YOU ARE GOING TO HAVE TO PAY $ $ $ !!!</p>
        <p class = "italics">“The future depends on what you do today.” - Mahatma Gandhi</p>

            <label>You must complete a half day job shadow in your particular career interest: 
            Please provide the following information:</label><br>
            <label for = "q8">Company:</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -8']); ?> </p>
             
            <label for = "q9">Who was your contact at the company?</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -9']); ?> </p>
             
            <label for = "q10">What education do you need for your position?</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -10']); ?> </p>
             
            <label for = "q11">Did you like the work environment?</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -11']); ?> </p>
             
            <label for = "q12">What did you learn that you did not know?</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -12']); ?> </p>
             
            <label for = "q13">Do they offer high school internships?</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -13']); ?> </p>
             
            <label for = "q14">Would you like to stay in this career field after your observation?
            If yes, please describe why; if no please describe why not?</label>
                            
             <p><?php echo htmlspecialchars($row['Worksheet 3 -14']); ?> </p>

        <h2>“Find out what you like doing best, and
        get someone to pay you for doing it.” - Katharine Whitehorn</h2>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>