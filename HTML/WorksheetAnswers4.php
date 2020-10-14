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
        <h2>Cost of Living</h2>
        <p class = "italics">What type of lifestyle do you want?        How much is enough?</p>
        <p>That is entirely up to you and is determined by the lifestyle you want to live.
        You may want to live like the Kardashians and have $500,000 cars, the latest fashions, a couple
        of mansions, personal assistants, an airplane, and also throw lavish parties. In that case, you 
        will need a lot of money.</p>
        <p>Many people just want to have enough money to be financially free... to do what they want, 
        when they want, but not splurge on the excesses.</p>
        <p>And yet other people want to live a simple life, content with working and having enough for basic 
        necessities.</p>
        <h2>The great thing is that you get to decide. There’s no right or wrong answer. 
        What type of lifestyle do you want? Here are some options:</h2>
        <p>*In the Poor House – Broke, hungry, can’t afford to pay bills, trying to get out of debt, worried
        that your car will be repossessed, forced to borrow money from family and friends to survive, 
        can’t afford to heat your home when its cold out...</p>
        <p>*Just getting by – This is where most Americans are right now. They have enough to pay the 
        bills now, but they are one paycheck away from the poor house.</p>
        <p>*Safe and Sound – You have a solid budget that you can stick to, can afford to pay your bills 
        and are not racking up debt. In fact being safe and sound means you do not have debt (besides 
        debt used to purchase appreciating assets – real estate, businesses, other investments), paid 
        off any student credit card debt. It’s a good feeling knowing you have money set aside for a 
        rainy day – job loss, medical expenses, car repairs. You’re safe and sound as long as you 
        maintain this lifestyle.</p>
        <p>*Financially Free – This means you can do what you want, when you want. If you want to work, 
        you can, but you don’t need to since you have the freedom to take time off for yourself or 
        family. You still have to live within a certain budget, but you can afford most of the things that 
        you want. Financially responsible people can easily achieve ‘financially free’ status. That will 
        enable you to retire young, and fully enjoy life.</p>
        <p>*Master of Money - Money is no object; you travel the world and buy anything you desire. Yet, 
        some people that live this lifestyle are not happy with their lives. I know it’s hard to believe, but 
        it’s true. That is why it is important to balance the art of achieving financial mastery with living a
        happy and healthy life.</p>
        <p>When you have enough money that you’re financially independent and your basic needs are 
        met - your entire life improves. Money does not buy happiness, however it is proven that people that
        have enough money to have their basic needs met have lower stress, better 
        relationships and live a more rewarding life.</p>
        <p class = "italics">“Waste your money and you’re only out of money, but waste your time
        and you’ve lost a part of your life.” –Michael Leboeuf</p>
        <p>There are a number of expenses you will have to account for as an adult. For example, 
        you will need a place to live and that costs money. You can use public transportation to get around
        town, but you may want a car. In the following activities, you will see how quickly it all adds up. 
        It’s never too early to plan for the lifestyle you want.</p>
            <h4>A. Housing and Furnishings</h4><br>
            <label for="q1">Where do you want to live (city, town, state)?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -1']); ?> </p>
             
            <label for="q2">Type of Housing (apartment, rental house, own house, luxury home, farm):</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -2']); ?> </p>
             
            <label for="q3">Monthly Payment or rent</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -3']); ?> </p>
             
            <label for="q4">Monthly property taxes</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -4']); ?> </p>
             
            <label for="q5">Monthly insurance</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -5']); ?> </p>
             
            <label for="q6">Utilities: Gas, Electricity, Water</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -6']); ?> </p>
             
            <label for="q7">Maintenance</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -7']); ?> </p>
             
            <label for="q8">Furnishings</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -8']); ?> </p>
             
            <label for="q9">Total Housing Costs</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -9']); ?> </p>
             
            <h4>B. Transportation</h4><br>
            <label for="q10">How would you like to travel to and from work (walk, bike, bus, car)?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -10']); ?> </p>
             
            <label for="q11">If you want to own your own car:</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -11']); ?> </p>
             
            <label for="q12">Monthly car payments</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -12']); ?> </p>
             
            <label for="q13">Insurance</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -13']); ?> </p>
             
            <label for="q14">Gasoline</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -14']); ?> </p>
             
            <label for="q15">Maintenance</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -15']); ?> </p>
             
            <label for="q16">If you prefer public transportation:</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -16']); ?> </p>
             
            <label for="q17">Public Transportation (train, bus, boat, ferry)</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -17']); ?> </p>
             
            <label for="q18">Total Transportation Costs Monthly</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -18']); ?> </p>
             
            <label for="q19">If you prefer public transportation:</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -19']); ?> </p>
             
            <h4>C. Clothing</h4><br>
            <label for="q20">Talk with your mentor to see how much they spend on clothing. Think about how much you
            spend on clothing each year. To determine your monthly clothing budget, take the total 
            and divide by 12.</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -20']); ?> </p>
             
            <h4>D. Food and Necessities</hr><br>
            <label>Personal items like soap, shampoo, deodorant, etc., as well as cleaning supplies, toilet paper, 
            and paper towels.<br> Use the information below to determine your food budget:<br>
            Budget the following for food PER WEEK:
            Thrifty food plan = $36.60, Low-cost food plan = $47.30 Moderate-cost food plan = $58.50 
            Liberal food plan = $71.60</label><br>
            <label for="q21">Monthly Food Costs</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -21']); ?> </p>
             
            <label for="q22">Monthly Necessities Costs</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -22']); ?> </p>
             
            <label for="q23">Total Food & Necessities Costs</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -23']); ?> </p>
             
            <h4>E. Recreation and Entertainment</h4><br>
            <label>You need recreation and entertainment to make life fun. Things to consider when calculating 
            your monthly budget are: dining out, entertaining friends, movies, concerts, sporting events, 
            books, newspapers, magazines, music, videos, and hobbies.</label><br>
            <label for="q24">Total Monthly Recreation and Entertainment Costs</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -24']); ?> </p>
             
            <label>Enter the monthly amounts from each of these categories:</label><br>
            <label for="q25">How much money do you need to earn in a year to live your desired lifestyle?</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -25']); ?> </p>
             
            <label for="q26">Housing</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -26']); ?> </p>
             
            <label for="q27">Transportation</label><br>
                 
             <p><?php echo htmlspecialchars($row['Worksheet 4 -27']); ?> </p>
             
            <label for="q28">Clothing</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -28']); ?> </p>
             
            <label for="q29">Food & Sundries</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -29']); ?> </p>
             
            <label for="q30">Recreation & Entertainment</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -30']); ?> </p>
             
            <label for="q31">Subtotal</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -31']); ?> </p>
             
            <label for="q32">Taxes (add 25%)</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -32']); ?> </p>
             
            <label for="q33">Total Monthly Living Costs</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -33']); ?> </p>
             
            <label for="q34">Multiply by 12 Months</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -34']); ?> </p>
             
            <label for="q35">Annual Income Needed</label><br>
                
             <p><?php echo htmlspecialchars($row['Worksheet 4 -35']); ?> </p>

        <h3>***Note: This does not include health(medical insurance, eye glasses, 
        prescription medication, ect), child care, savings,
        retirement and miscellaneous expenses.***</h3>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
    <?php endwhile ?>
</html>