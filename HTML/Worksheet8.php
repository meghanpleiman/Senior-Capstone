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
        if(!strlen(trim($_POST['q1']))){
            $type = $_FILES['myfile']['type'];
            if ($type != "application/pdf"){
               echo("<script>alert('Please submit a pdf file.')</script>"); 
               header("reload()");
            } else {
               $textareaValue1 = trim($_POST['q1']);
                $vari = "";
                $name = $_FILES['myfile']['name'];
                
    	        $data = file_get_contents($_FILES['myfile']['tmp_name']);
    	        $sql = $pdo->prepare("INSERT INTO `Worksheet 8 Answers`
        	       VALUES (?,?,?,?,?,?,?)");
        	    $sql->bindParam(1,$FirstName);
        	    $sql->bindParam(2,$LastName);
        	    $sql->bindParam(3,$name);
        	    $sql->bindParam(4,$type);
        	    $sql->bindParam(5,$data);
        	    $sql->bindParam(6,$vari);
        	    $sql->bindParam(7,$Teacher);
                $sql->execute(); 
                
                echo("<script>alert('CAOA Worksheet 8 has been submitted!')</script>");
            }
            
              
            
        } else {
        $textareaValue1 = trim($_POST['q1']);
	       
	       $sql = "INSERT INTO `Worksheet 8 Answers`(`First Name`, `Last Name`,`Filename`, `Worksheet 8 -1 File`, `Worksheet 8 -1`, `Teacher`) 
    	       VALUES ('$User', '$LastName', '', '', '$textareaValue1','$Teacher')";
    	    $result = $pdo->prepare($sql); 
            $result->execute();
            
            echo("<script>alert('CAOA Worksheet 8 has been submitted!')</script>");
        }
	    
	    
	    
    }
?>

<html>
    <head>
        <title>CAOA Worksheet 8</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Resume & Cover Letter & Interviewing</h2>
        <p class = "italics">I don’t have a job, why do I need a resume or I just work at McDonald’s 
        part-time, why do I need a resume? Also what is a cover letter?</p>
        <p>Resumes are used to make a favorable impression on a prospective employer. Your 
        resume is often the first impression a potential employer has of you. For this reason, it 
        is often referred to as one of the most crucial steps taken during a job search. It lists 
        your experiences and helps employers decide whether your experiences match with 
        the job you are pursuing.</p>
        <p>Cover letters are important because they tell employers the type of position you're 
        seeking and exactly how you're qualified for it. You might think your resume gives 
        employers all the info they need about you but a cover letter gives you a place to talk 
        about those experiences and how you would be a good fit for the job.</p>
        <p class = "italics">“Find out what you like doing best and get someone to pay you for doing it." — Katherine Whitehorn</p>
        <p>A job interview enables a company to learn more about an applicant, you, while you 
        have the opportunity to become familiar with the responsibilities of the position you 
        are applying for. The process allows both you and the company to exchange 
        information, ask questions and evaluate the potential for establishing a professional 
        working relationship. You should ask for a tour to see the work environment, you 
        should always have questions, and you should be dressed appropriately to show you 
        respect the company and yourself.</p>
        <p>Here are a few questions you should ask:
        How much does this position pay, what are the hours, what are the responsibilities, 
        what should I wear, when can I start, are there any supplies I should bring, who will I be 
        reporting to? Practice interviewing with the attached questions/answers.</p>
        <p>Again this is your chance to “brag” about your skills and abilities and how you will be
        an asset to the company. The company needs you to fill a need, tell them how you can do it!</p>
        <form method="POST" enctype="multipart/form-data">
            <label for="q1">Please complete your own resume and cover letter. You can copy and paste it
            into the textbox or do a file upload.</label><br>
            <textarea id="q1" rows="4" cols="50" name="q1"></textarea><br>
        
            <input type="file" name="myfile"/>
            <button type="submit" style ="float:right" name="submit">Submit</button>
            <button style ="float:right" name="submit"><a href="Worksheet8-2.php">Go To Next Page</a></button>
            
        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>