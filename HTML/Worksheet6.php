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
	    
	    $sqlLastName = "SELECT `Last Name` FROM `Login_Users` WHERE `First Name` = '$FirstName'";
        $q = $pdo->query($sqlLastName);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        
        $LastName = $row['Last Name'];

                    
        $sql = "INSERT INTO `Worksheet 6 Answers`(`First Name`, `Last Name`, `Worksheet 6 -1`, `Worksheet 6 -2`, `Worksheet 6 -3`, `Teacher`) 
    	       VALUES ('$FirstName', '$LastName', '$textareaValue1', '$textareaValue2', '$textareaValue3', '$Teacher')";
    	$result = $pdo->prepare($sql); 
        $result->execute();

    }

?>

<html>
    <head>
        <title>CAOA Worksheet 6</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <form action="" method="POST">
        <h2>NEEDS vs WANTS</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
        <p>As a young adult you are going to be making decisions that affect your life's
        outcomes. These decisions are going to be based on your needs and wants.
        Let’s review NEEDS vs WANTS:</p>
        <p>NEEDS: Things you need to survive</p>
        <label for = "q1">Please list 5:</label>
        <textarea id="q1" rows="5" cols="30" name="q1"></textarea><br>
        <p>WANTS: Things that you desire to have</p>
        <label for = "q2">Please list 5:</label>
        <textarea id="q2" rows="5" cols="30" name="q2"></textarea><br>
        <p>Now the decisions that are based on your needs vs wants are OPPORTUNITY
        COSTS.</p><br>
        <p>Opportunity Cost Example 1: I need socks because it is winter but I want bubble
        gum. Do I choose bubble gum and give up having warm feet or do I choose
        socks and have warm feet and give up short term candy and flavor?</p><br>
        <p>Opportunity Cost Example 2: I need to go to work on-time but I want to play this
        video game for 5 more minutes. Do I choose to go to work on-time because I
        need money and I want to show a good work ethic or do I choose to play the
        video game because I want to get to the next level and my boss is flexible anyway
        or I might lose my job?</p><br>
        <p>Opportunity Cost Example 3: I am hungry and I have $5.00. Do I buy a sandwich
        for $3.50 which will keep me full for longer or do I buy an expensive drink for
        $5.00 because it’s cool to carry the cup around? Could I use the $1.50 I save by
        buying a sandwich and put it in a savings account?</p><br>
        <p>I am not here to tell you you cannot choose a few wants here or there but there is
        an opportunity cost to your decisions.</p>
        <label for = "q3">Please give 5 personal examples of opportunity costs and tell me whether you
        chose need or want in each example.</label>
        <textarea id="q3" rows="15" cols="30" name="q3"></textarea><br>


            <button onclick="myFunction()" type="submit" style ="float:right" name="submit">Submit</button>

            <script>
                function myFunction() {
                    alert("CAOA Worksheet 6 has been submitted!");
                }
            </script>
        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>