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
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $row = $q->fetch();
    
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
        <h2>Final Review</h2>
        <p class = "italics">What do you know? What have you learned? 
        And how has this class impacted your life?</p>
        <p class = "bold">Please create a slideshow/powerpoint presentation which must include:</p>
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
            
            <ol>
            <?php
            $fileSQL = $pdo->prepare("SELECT * FROM `Worksheet 9 Answers`");
            $fileSQL->execute();
            while($row = $fileSQL->fetch()){
                echo "<li><a href='ViewFile.php?Worksheet=9&FileName=".$row['FileName']."' target='_blank'>".$row['FileName']."</a></li>";
            }
            
            
            ?>
            </ol>
            
            <input type="file" name="myfile">

            <button onclick="myFunction()" type="submit" style ="float:right" name="submit">Submit</button>
            

            <script>
                function myFunction() {
                    alert("CAOA Worksheet 9 has been submitted!");
                }
            </script>
            
        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>