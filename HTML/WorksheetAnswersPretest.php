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
        <title>Pretest</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">

    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Pretest</h2>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label for="q1">Do you use a savings and checking account? Yes/No Why?</label><br>
                
             <p><?php echo htmlspecialchars($row['Pretest -1']); ?> </p>
             
            <label for="q2">What are the benefits of a budget?</label><br>
                
             <p><?php echo htmlspecialchars($row['Pretest -2']); ?> </p>
             
            <label for="q3">What is a roth ira?</label><br>
                
             <p><?php echo htmlspecialchars($row['Pretest -3']); ?> </p>
             
            <label for="q4">What is your cost of living?</label><br>
                
             <p><?php echo htmlspecialchars($row['Pretest -4']); ?> </p>
             
            <label for="q5">What is your ideal career? Picture yourself working...please answer the questions below based on where you picture yourself working:</label><br>
            <label for="q5.1">A. What time of day is it?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -5']); ?> </p>
             
            <label for="q5.2">B. Where are you?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -6']); ?> </p>
             
            <label for="q5.3">C. What are you doing?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -7']); ?> </p>
                
            <label for="q5.4">D. Who are you working with?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -8']); ?> </p>
                
            <label for="q5.5">E. What about this work feels good?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -9']); ?> </p>
                         
            <label for="q5.6">F. Who are you talking to for support at work if you have a question or
            don’t know what to do?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -10']); ?> </p>
                          
            <label for="q5.7">G. Who is paying you?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -11']); ?> </p>
                    
            <label for="q5.8">H. How much are you getting paid?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -12']); ?> </p>
                
            <label for="q5.9">I. Why are they paying you instead of somebody else?</label>
                
             <p><?php echo htmlspecialchars($row['Pretest -13']); ?> </p>
                           
            <label for="q6">During this course we will be able to develop your life skills needs. Please select from these additional learning opportunities:</label><br>
            
            <p><?php echo htmlspecialchars($row['Pretest -14']); ?> </p>


        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>