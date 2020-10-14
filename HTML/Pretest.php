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
    	$textareaValue5 = trim($_POST['q5-1']);
    	$textareaValue6 = trim($_POST['q5-2']);
    	$textareaValue7 = trim($_POST['q5-3']);
    	$textareaValue8 = trim($_POST['q5-4']);
	    $textareaValue9 = trim($_POST['q5-5']);
    	$textareaValue10 = trim($_POST['q5-6']);
    	$textareaValue11= trim($_POST['q5-7']);
    	$textareaValue12 = trim($_POST['q5-8']);
    	$textareaValue13 = trim($_POST['q5-9']);
	    

        $sqlLastName = "SELECT `Last Name` FROM `Login_Users` WHERE `First Name` = '$FirstName'";
        $q = $pdo->query($sqlLastName);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        
        $LastName = $row['Last Name'];
        
        $answer = implode("," , $_POST['check']);
        


                    
        $sql = "INSERT INTO `Worksheet Pretest Answers`(`First Name`, `Last Name`, `Pretest -1`, `Pretest -2`, `Pretest -3`, `Pretest -4`, `Pretest -5`, `Pretest -6`, `Pretest -7`,
                 `Pretest -8`, `Pretest -9`, `Pretest -10`, `Pretest -11`, `Pretest -12`, `Pretest -13`,`Pretest -14`,`Teacher`) 
    	       VALUES ('$FirstName', '$LastName', '$textareaValue1', '$textareaValue2', '$textareaValue3', '$textareaValue4', '$textareaValue5', '$textareaValue6', '$textareaValue7',
    	            '$textareaValue8', '$textareaValue9', '$textareaValue10', '$textareaValue11', '$textareaValue12', '$textareaValue13', '$answer','$Teacher')";
        $result = $pdo->prepare($sql); 
        $result->execute();
    }
?>

<html>
    <head>
        <title>Pretest</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">

    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Pretest</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
        <form action="" method="POST">
            <label for="q1">Do you use a savings and checking account? Yes/No Why?</label><br>
            <textarea id="q1" rows="4" cols="50" name="q1"></textarea><br>
            <label for="q2">What are the benefits of a budget?</label><br>
            <textarea id="q2" rows="4" cols="50" name="q2"></textarea><br>
            <label for="q3">What is a roth ira?</label><br>
            <textarea id="q3" rows="4" cols="50" name="q3"></textarea><br>
            <label for="q4">What is your cost of living?</label><br>
            <textarea id="q4" rows="4" cols="50" name="q4"></textarea><br>
            <label for="q5">What is your ideal career? Picture yourself working...please answer the questions below based on where you picture yourself working:</label><br>
            <label for="q5-1">A. What time of day is it?</label>
            <textarea id="q5-1" rows="1" cols="50" name="q5-1"></textarea><br>
            <label for="q5-2">B. Where are you?</label>
            <textarea id="q5-2" rows="1" cols="50" name="q5-2"></textarea><br>
            <label for="q5-3">C. What are you doing?</label>
            <textarea id="q5-3" rows="1" cols="50" name="q5-3"></textarea><br>   
            <label for="q5-4">D. Who are you working with?</label>
            <textarea id="q5-4" rows="1" cols="50" name="q5-4"></textarea><br>   
            <label for="q5-5">E. What about this work feels good?</label>
            <textarea id="q5-5" rows="1" cols="50" name="q5-5"></textarea><br>              
            <label for="q5-6">F. Who are you talking to for support at work if you have a question or
            don’t know what to do?</label>
            <textarea id="q5-6" rows="1" cols="50" name="q5-6"></textarea><br>             
            <label for="q5-7">G. Who is paying you?</label>
            <textarea id="q5-7" rows="1" cols="50" name="q5-7"></textarea><br>       
            <label for="q5-8">H. How much are you getting paid?</label>
            <textarea id="q5-8" rows="1" cols="50" name="q5-8"></textarea><br>   
            <label for="q5-9">I. Why are they paying you instead of somebody else?</label>
            <textarea id="q5-9" rows="1" cols="50" name="q5-9"></textarea><br>               
            <label for="q6">During this course we will be able to develop your life skills needs. Please select from these additional learning opportunities:</label><br>
            <div class = "checkboxes">                
                <input type="checkbox" id="Time Management/Organization Skills" name="check[]" value="Time Management/Organization Skills">
                <label for="Time Management/Organization Skills">Time Management/Organization Skills</label><br>
            </div>
            <input type="checkbox" id="Setting Goals and Getting things done" name="check[]" value="Setting Goals and Getting things done">
            <label for="Setting Goals and Getting things done">Setting Goals and Getting things done</label><br>
            <input type="checkbox" id="Stress Management" name="check[]" value="Stress Management">
            <label for="Stress Management">Stress Management</label><br>
            <input type="checkbox" id="Money Management" name="check[]" value="Money Management">
            <label for="Money Management">Money Management</label><br>
            <input type="checkbox" id="Public Speaking" name="check[]" value="Public Speaking">
            <label for="Public Speaking">Public Speaking</label><br>
            <input type="checkbox" id="Interview Skills/Resume/Cover Letter Writing" name="check[]" value="Interview Skills/Resume/Cover Letter Writing">
            <label for="Interview Skills/Resume/Cover Letter Writing">Interview Skills/Resume/Cover Letter Writing</label><br>

            <button onclick="myFunction()" type="submit" style ="float:right" name="submit">Submit</button>
            
            <script>
                function myFunction() {
                    alert("CAOA Pretest has been submitted!");
                }
            </script>
        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>