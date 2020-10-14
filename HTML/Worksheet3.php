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
    	$textareaValue8 = trim($_POST['q8']);
	    $textareaValue9 = trim($_POST['q9']);
    	$textareaValue10 = trim($_POST['q10']);
    	$textareaValue11 = trim($_POST['q11']);
    	$textareaValue12 = trim($_POST['q12']);
    	$textareaValue13 = trim($_POST['q13']);
    	$textareaValue14 = trim($_POST['q14']);
	    
        $sqlLastName = "SELECT `Last Name` FROM `Login_Users` WHERE `First Name` = '$FirstName'";
        $q = $pdo->query($sqlLastName);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        
        $LastName = $row['Last Name'];
                    
        $sql = "INSERT INTO `Worksheet 3 Answers`(`First Name`, `Last Name`, `Worksheet 3 -1`, `Worksheet 3 -2`, `Worksheet 3 -3`, `Worksheet 3 -4`, `Worksheet 3 -5`, `Worksheet 3 -6`, `Worksheet 3 -7`,
                 `Worksheet 3 -8`, `Worksheet 3 -9`, `Worksheet 3 -10`, `Worksheet 3 -11`, `Worksheet 3 -12`, `Worksheet 3 -13`, `Worksheet 3 -14`, `Teacher`) 
    	       VALUES ('$FirstName', '$LastName', '$textareaValue1', '$textareaValue2', '$textareaValue3', '$textareaValue4', '$textareaValue5', '$textareaValue6', '$textareaValue7',
    	            '$textareaValue8', '$textareaValue9', '$textareaValue10', '$textareaValue11', '$textareaValue12', '$textareaValue13', '$textareaValue14', '$Teacher')";
        $result = $pdo->prepare($sql); 
        $result->execute();
    }

?>

<html>
    <head>
        <title>CAOA Worksheet 3</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Career Investigation</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
        <p class = "bold">"The best way to predict the future is to create it." —Abraham Lincoln</p>
        <p>Career is an occupation for a significant period of a person's life tied to an income. 
        Setting career goals is an integral part of career planning. What do you want to be when you grow up?</p>
        <form action="" method="POST">
            <label for = "q1">What is your career goal? You see a door in front of you and when you walk through 
            that door you will be in your career...what is that career? Write name of career in box:</label><br>
            <textarea id = "q1" rows = "2" cols = "50" name="q1"></textarea><br>

            <p class = "italics">"I want to look back on my career and be proud of my work” —Jon Stewart</p>
            <h2>Please complete these questions:</h2><br>

            <label for="q2">What is your career?</label><br>
            <textarea id="q2" rows="4" cols="50" name="q2"></textarea><br>
            <label>Please show me your plan backwards from your career to your point in high school
            today:</label><br>
            <label for="q3">What steps need to be taken, if education is involved, do you need a
            degree/certification?</label><br>
            <textarea id="q3" rows="4" cols="50" name="q3"></textarea><br>
            <label for="q4">If yes, what type of degree/certification?</label><br>
            <textarea id="q4" rows="2" cols="50" name="q4"></textarea><br>
            <label for="q5">Which schools provide this degree/certification?</label><br>
            <textarea id="q5" rows="4" cols="50" name="q5"></textarea><br>
            <label for="q6">How much does it cost?</label><br>
            <textarea id="q6" rows="2" cols="50" name="q6"></textarea><br>
            <label for="q7">How long does it take to achieve the degree/certification?</label><br>
            <textarea id="q7" rows="2" cols="50" name="q7"></textarea><br>

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
            <textarea id = "q8" rows = "2" cols = "50" name="q8"></textarea><br>
            <label for = "q9">Who was your contact at the company?</label>
            <textarea id = "q9" rows = "4" cols = "50" name="q9"></textarea><br>
            <label for = "q10">What education do you need for your position?</label>
            <textarea id = "q10" rows = "4" cols = "50" name="q10"></textarea><br>
            <label for = "q11">Did you like the work environment?</label>
            <textarea id = "q11" rows = "4" cols = "50" name="q11"></textarea><br>
            <label for = "q12">What did you learn that you did not know?</label>
            <textarea id = "q12" rows = "4" cols = "50" name="q12"></textarea><br>
            <label for = "q13">Do they offer high school internships?</label>
            <textarea id = "q13" rows = "4" cols = "50" name="q13"></textarea><br>
            <label for = "q14">Would you like to stay in this career field after your observation?
            If yes, please describe why; if no please describe why not?</label>
            <textarea id = "q14" rows = "4" cols = "50" name="q14"></textarea><br>
        
            <button onclick="myFunction()" type="submit" style ="float:right" name='submit'>Submit</button>

            <script>
                function myFunction() {
                    alert("CAOA Worksheet 3 has been submitted!");
                }
            </script>
        </form>
        <h2>“Find out what you like doing best, and
        get someone to pay you for doing it.” - Katharine Whitehorn</h2>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>