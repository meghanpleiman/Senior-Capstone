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
	    $textareaValue2 = trim($_POST['q2']);
	    
        $sql = "INSERT INTO `Worksheet 8-2 Answers`(`First Name`, `Last Name`, `Worksheet 8 -2`, `Teacher`) 
    	       VALUES ('$FirstName', '$LastName', '$textareaValue2','$Teacher')";
    	    $result = $pdo->prepare($sql); 
            $result->execute();
	    
    }
?>

<html>
    <head>
        <title>CAOA Worksheet 8</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Interviewing</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
        <form method="POST">
        
        <p class = "bold">YOU NEVER GET A SECOND CHANCE TO MAKE A FIRST IMPRESSION!!!</p>
        <p>Below are a few sample resumes and cover letters.</p>
        <h2>INTERNSHIP</h2>
        <p>Now that you have your resume, cover letter and interviewing experience 
        it’s time to get your internship! The job market is a competitive one, and 
        often that is a tough learning curve for recent graduates. According to 
        dictionary.com​,​ an internship is defined as “any official or formal program 
        to provide practical experience for beginners in an occupation or 
        profession.” The most important element of internships is that they 
        integrate classroom knowledge and theory with practical application and 
        skills developed in professional or community settings. They also bring a wealth 
        of benefits to students, both while completing a degree and when seeking a career 
        path post-graduation. Benefits:</p>
        <p class = "number">1. Application of education and career exploration. Internships are a 
        great way to apply the knowledge from the classroom to ​real-world experience​. Learning is 
        one thing, but taking those skills into the workforce and applying them is a great way to 
        explore different career paths and specializations that suit individual interests.</p>
        <p class = "number">2. Gain experience and increase marketability. Having an internship 
        gives you experience​ in the career field you want to pursue. Not only does this give 
        individuals an edge over other candidates when applying for jobs, it also prepares them 
        for what to expect in their field and increases confidence in their work.</p>
        <p class = "number">3. Networking. Having an internship benefits you in the working 
        environment, and it also ​builds your professional network​. There is a 1 in 16 chance 
        of securing a job by connecting with people, so networking is critical. Internships 
        provide a great environment to meet professionals in the career field you want to pursue, 
        as well as other interns who have similar interests.</p>
        <p class = "number">4. Professionalism. Internships can provide students with the soft skills 
        needed in the workplace and in leadership positions. In a ​LinkedIn Skills Report​ (2018), 57% 
        of people rated soft skills as being more important than technical skills. Skills, such as 
        communication, leadership, problem-solving, and teamwork can all be learned through an internship 
        and utilized beyond that experience.</p>
        <p class = "number">5. Learn how a professional workplace operates. Depending on your major,
        you may read about how organizations thrive and function in textbooks, hear from guest 
        speakers who talk about organizational structures, or dive into case studies about workplace 
        culture, but nothing compares to living the actual experience. Internships help students ​learn 
        all about workplace culture​, employee relations, and leadership structure, which should help 
        them onboard in their first professional job with more ease than if they haven’t had professional 
        experience.</p>
        <p class = "number">6. Build your resume. Most organizations and jobs that you apply to 
        following graduation want employees to have some sort of professional experience, ​even for 
        entry-level jobs​. In the event that you are a finalist for a position and haven’t had an 
        internship experience but the other finalist has, you may lose out on a job opportunity, so 
        make sure you at least have one internship on your resume before leaving college to give you 
        a leg up on the competition.</p>
        <p class = "number">7. Gain professional feedback. Not only will you be helping out the 
        organization you intern with, but they’ll help you out too. While professors and teachers 
        will prepare you for the theoretical side of your field and hands-on projects, internships 
        provide opportunities for ​receiving feedback​ from someone who works in your desired field 
        on a daily basis.</p>
        <p class = "number">8. Learn from others. It might seem common sense – you’re interning 
        to learn skills, after all – but don’t forget to purposefully observe others in their 
        job role to learn the ins and outs of different positions. Consider asking your supervisor 
        if you can shadow them for a day, along with other people in your department. Ask to sit 
        in on department wide meetings as well. Act like a sponge and soak up all the information 
        you can during your internship – it will benefit you in the long run.</p>
        <p class = "number">9. Is this your career pathway? Figure out what you like and don’t like. 
        While everyone probably wants to walk away from an internship feeling excited and passionate 
        about the experience, there’s a silver-lining to be found if you didn’t enjoy the job: you’ll 
        know what you don’t like. According to an ​article​ from ​monster.com​, “figuring out what type 
        of job you ​don’t want ​while you’re interning can help prevent you from accepting an ill-fitting
        job when you graduate.”</p>

            <label for="q2">Reach out to local businesses to request an internship in your career 
            pathway. Please list 3-5 businesses, position, and contact person you are reaching out to:</label><br>
            <textarea id="q2" rows="10" cols="50" name="q2"></textarea><br>

            <button onclick="myFunction()" type="submit" style ="float:right" name="submit">Submit</button>

            <script>
                function myFunction() {
                    alert("CAOA Worksheet 8 has been submitted!");
                }
            </script>
        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>