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
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="q1">Please complete your own resume and cover letter. You can copy and paste it
            into the textbox or do a file upload.</label><br>
            <ol>
            <?php
            $fileSQL = $pdo->prepare("SELECT * FROM `Worksheet 8 Answers`");
            $fileSQL->execute();
            while($row = $fileSQL->fetch()){
                echo "<li><a href='ViewFile.php?Worksheet=8&FileName=".$row['FileName']."' target='_blank'>".$row['FileName']."</a></li>";
            }
            
            
            ?>
            </ol>
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
                           
            <p><?php echo htmlspecialchars($row['Worksheet 8 -2']); ?> </p>
             

        </form>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>