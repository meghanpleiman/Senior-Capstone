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
    
        $sqlLastName = "SELECT `Last Name` FROM `Login_Users` WHERE `First Name` = '$FirstName'";
        $q = $pdo->query($sqlLastName);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        
        $LastName = $row['Last Name'];
    
    if(isset($_POST['submit']))
    {
        
            $type = $_FILES['myfile']['type'];
            if ($type != "application/pdf"){
               echo("<script>alert('Please submit a pdf file.')</script>"); 
               header("reload()");
            } else {
                $name = $_FILES['myfile']['name'];
        	    $data = file_get_contents($_FILES['myfile']['tmp_name']);
        	    $sql = $pdo->prepare("INSERT INTO `Worksheet 9 Answers`
            	       VALUES (?,?,?,?,?,?)");
            	$sql->bindParam(1,$FirstName);
            	$sql->bindParam(2,$LastName);
            	$sql->bindParam(3,$name);
            	$sql->bindParam(4,$type);
            	$sql->bindParam(5,$data);
            	$sql->bindParam(6,$Teacher);
                $sql->execute(); 
                
                echo("<script>alert('CAOA Worksheet 9 has been submitted!')</script>");
            }  
    }

?>

<html>
    <head>
        <title>CAOA Worksheet 9</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Final Review</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
        <p class = "italics">What do you know? What have you learned? 
        And how has this class impacted your life?</p>
        <p class = "bold">Please create a slideshow/powerpoint presentation, (must be converted to pdf upon submission) which must include:</p>
        <p class = "bullet">● List your goals and daily activities for each goal</p>
        <p class = "bullet">● What did you change to improve your time management (include photo of your
        organized room)</p>
        <p class = "bullet">● Please provide a detailed career pathway plan (include college expenses and
        experiences that have helped you make this decision)</p>
        <p class = "bullet">● What is your cost of living for your future life;will your career be able to support it?</p>
        <p class = "bullet">● What did you learn about the importance of budgeting & how it affects opportunity costs?</p>
        <p class = "bullet">● What are the benefits of you having a Roth IRA?</p>
        <p class = "bullet">● Please attach your completed Resume & Cover Letter</p>
        <p class = "bullet">● Where was your internship and how has it impacted your career decision?</p>
        <p class = "bullet">● Vision Board</p>
        <p>Each bullet point should have it’s own slide. If you would like to add additional slides 
        that is fine. You will receive extra points for using quotes.</p>
        <h2>“The past cannot be changed. The future is yet in your power.” - Unknown</h2>
        <h2>“​Education is the passport to the future, for tomorrow belongs to those who 
        prepare for it today.” - Malcolm X</h2>
        <h2>“Infuse your life with action. Don't wait for it to happen. Make it happen. Make 
        your own future. “​ - ​Bradley Whitford</h2>
        <p class = "blue">Mission of Career Analysis Organization of America ​is to learn as much as possible 
        about each individual student, provide them with the tools necessary to be successful in 
        their career path chosen specifically for them by them.<br>
        MAKE YOUR FUTURE YOURS</p>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile">

            <button type="submit" style ="float:right" name="submit">Submit</button>
            
        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>