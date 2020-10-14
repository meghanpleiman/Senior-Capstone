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
        <h2>Roth IRA</h2>
        <p class = "italics">I am not even close to retirement age, why do I need to know about an 
        IRA-INDIVIDUAL RETIREMENT ACCOUNT?</p>
        <p>A Roth IRA is one of the best kept secrets from teens! If you have earned income (this 
        means you have a job that pays state and federal taxes for you) you can deposit into a 
        Roth IRA.</p>
        <p>A Roth IRA is a retirement account. You can deposit up to $6000 a year into a Roth 
        IRA or the maximum of your earned income, whichever is less. So if you earned $4000 
        you can only deposit up to $4000 that year. This money grows tax free. So if you have 
        it invested in a mutual fund that earns 14% APY. You just earned 14% on $4000 and 
        you do not have to pay taxes on that money! You just made $560.00.</p>
        <p class = "italics">“It's not how much money you make, but how much money you
        keep, how hard it works for you”- Robert Kiyosaki</p>
        <p>● In 2019, Roth IRAs allow for contributions of up to $6,000 per year — or 
        $7,000 if you’re 50 or older — and you can use it in addition to a 401(k). 
        (Those limits are up from $5,500 and $6,500 in 2018.)</p>
        <p>● You can withdraw the money you contributed without tax or penalty at any 
        time, with no restrictions, because you’ve already paid taxes on that 
        money. You may, however, be taxed or penalized if you withdraw your 
        investment earnings.</p>
        <p>● The IRS allows you to withdraw contributions from your Roth IRA 
        penalty-free to buy your first home, plus up to $10,000 of earnings.</p>
        <p>● You can use Roth IRA money to pay for qualified college expenses without 
        an early distribution penalty, so you can use the account to supplement or 
        as an alternative to a college savings account like a 529 plan. Keep in mind 
        that only the penalty is waived — you may still owe income taxes on early 
        distributions of earnings, even if for qualified college costs.</p>
        <p>● You can open a Roth IRA at any age, as long as you have earned income 
        (you can’t contribute more than your earned income).</p>
        <p>● When opening a Roth IRA make sure you understand the product you are 
        investing in; the same goes for withdrawing from you Roth IRA talk to an 
        accountant before making that withdrawal.</p>
        <h2>Questions</h2><br>

            <label for="q1">Please meet with a local financial advisor and give a brief description of your 
            meeting, the types of Roth IRAs and if you qualify to invest.</label><br>
               
             <p><?php echo htmlspecialchars($row['Worksheet 7 -1']); ?> </p>
             

        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>