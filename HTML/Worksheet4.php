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
    	$textareaValue15 = trim($_POST['q15']);
	    $textareaValue16 = trim($_POST['q16']);
    	$textareaValue17 = trim($_POST['q17']);
    	$textareaValue18 = trim($_POST['q18']);
    	$textareaValue19 = trim($_POST['q19']);
    	$textareaValue20 = trim($_POST['q20']);
    	$textareaValue21 = trim($_POST['q21']);
    	$textareaValue22 = trim($_POST['q22']);
	    $textareaValue23 = trim($_POST['q23']);
    	$textareaValue24 = trim($_POST['q24']);
    	$textareaValue25 = trim($_POST['q25']);
    	$textareaValue26 = trim($_POST['q26']);
    	$textareaValue27 = trim($_POST['q27']);
    	$textareaValue28 = trim($_POST['q28']);
    	$textareaValue29 = trim($_POST['q29']);
	    $textareaValue30 = trim($_POST['q30']);
    	$textareaValue31 = trim($_POST['q31']);
    	$textareaValue32 = trim($_POST['q32']);
    	$textareaValue33 = trim($_POST['q33']);
    	$textareaValue34 = trim($_POST['q34']);
    	$textareaValue35 = trim($_POST['q35']);
	    
	    $sqlLastName = "SELECT `Last Name` FROM `Login_Users` WHERE `First Name` = '$FirstName'";
        $q = $pdo->query($sqlLastName);
        $q->setFetchMode(PDO::FETCH_ASSOC);
        $row = $q->fetch();
        
        $LastName = $row['Last Name'];

                    
        $sql = "INSERT INTO `Worksheet 4 Answers`(`First Name`, `Last Name`, `Worksheet 4 -1`, `Worksheet 4 -2`, `Worksheet 4 -3`, `Worksheet 4 -4`, `Worksheet 4 -5`, `Worksheet 4 -6`, `Worksheet 4 -7`,
                 `Worksheet 4 -8`, `Worksheet 4 -9`, `Worksheet 4 -10`, `Worksheet 4 -11`, `Worksheet 4 -12`, `Worksheet 4 -13`, `Worksheet 4 -14`, `Worksheet 4 -15`, `Worksheet 4 -16`, `Worksheet 4 -17`,
                 `Worksheet 4 -18`, `Worksheet 4 -19`, `Worksheet 4 -20`, `Worksheet 4 -21`,`Worksheet 4 -22`, `Worksheet 4 -23`, `Worksheet 4 -24`, `Worksheet 4 -25`, `Worksheet 4 -26`, `Worksheet 4 -27`,
                 `Worksheet 4 -28`, `Worksheet 4 -29`, `Worksheet 4 -30`, `Worksheet 4 -31`, `Worksheet 4 -32`, `Worksheet 4 -33`, `Worksheet 4 -34`, `Worksheet 4 -35`, `Teacher`)
    	       VALUES ('$FirstName', '$LastName', '$textareaValue1', '$textareaValue2', '$textareaValue3', '$textareaValue4', '$textareaValue5', '$textareaValue6', '$textareaValue7',
    	            '$textareaValue8', '$textareaValue9', '$textareaValue10', '$textareaValue11', '$textareaValue12', '$textareaValue13', '$textareaValue14', '$textareaValue15', 
    	            '$textareaValue16', '$textareaValue17', '$textareaValue18', '$textareaValue19', '$textareaValue20', '$textareaValue21','$textareaValue22', '$textareaValue23', 
    	            '$textareaValue24', '$textareaValue25', '$textareaValue26', '$textareaValue27', '$textareaValue28', '$textareaValue29', '$textareaValue30', '$textareaValue31', 
    	            '$textareaValue32', '$textareaValue33', '$textareaValue34', '$textareaValue35', '$Teacher')";
        $result = $pdo->prepare($sql); 
        $result->execute();
    }

?>

<html>
    <head>
        <title>CAOA Worksheet 4</title>
        <link rel="stylesheet" href="../CSS/Worksheets.css">
    </head>
    <body>
        <img src = "../Worksheets/CAOA Logo">
        <h2>Cost of Living</h2>
        <button type="submit" style ="float:right" name="WorksheetPage"><a href="WorksheetPage.php">Go back to Worksheets</a></button>
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
        <form action="" method="post">
            <h4>A. Housing and Furnishings</h4><br>
            <label for="q1">Where do you want to live (city, town, state)?</label><br>
            <textarea id="q1" rows="1" cols="30" name="q1"></textarea><br>
            <label for="q2">Type of Housing (apartment, rental house, own house, luxury home, farm):</label><br>
            <textarea id="q2" rows="1" cols="30" name="q2"></textarea><br>
            <label for="q3">Monthly Payment or rent</label><br>
            <textarea id="q3" rows="1" cols="30" name="q3"></textarea><br>
            <label for="q4">Monthly property taxes</label><br>
            <textarea id="q4" rows="1" cols="30" name="q4"></textarea><br>
            <label for="q5">Monthly insurance</label><br>
            <textarea id="q5" rows="1" cols="30" name="q5"></textarea><br>
            <label for="q6">Utilities: Gas, Electricity, Water</label><br>
            <textarea id="q6" rows="1" cols="30" name="q6"></textarea><br>
            <label for="q7">Maintenance</label><br>
            <textarea id="q7" rows="1" cols="30" name="q7"></textarea><br>
            <label for="q8">Furnishings</label><br>
            <textarea id="q8" rows="1" cols="30" name="q8"></textarea><br>
            <label for="q9">Total Housing Costs</label><br>
            <textarea id="q9" rows="1" cols="30" name="q9"></textarea><br>
            <h4>B. Transportation</h4><br>
            <label for="q10">How would you like to travel to and from work (walk, bike, bus, car)?</label><br>
            <textarea id="q10" rows="1" cols="30" name="q10"></textarea><br>
            <label for="q11">If you want to own your own car:</label><br>
            <textarea id="q11" rows="1" cols="30" name="q11"></textarea><br>
            <label for="q12">Monthly car payments</label><br>
            <textarea id="q12" rows="1" cols="30" name="q12"></textarea><br>
            <label for="q13">Insurance</label><br>
            <textarea id="q13" rows="1" cols="30" name="q13"></textarea><br>
            <label for="q14">Gasoline</label><br>
            <textarea id="q14" rows="1" cols="30" name="q14"></textarea><br>
            <label for="q15">Maintenance</label><br>
            <textarea id="q15" rows="1" cols="30" name="q15"></textarea><br>
            <label for="q16">If you prefer public transportation:</label><br>
            <textarea id="q16" rows="1" cols="30" name="q16"></textarea><br>
            <label for="q17">Public Transportation (train, bus, boat, ferry)</label><br>
            <textarea id="q17" rows="1" cols="30" name="q17"></textarea><br>
            <label for="q18">Total Transportation Costs Monthly</label><br>
            <textarea id="q18" rows="1" cols="30" name="q18"></textarea><br>
            <label for="q19">If you prefer public transportation:</label><br>
            <textarea id="q19" rows="1" cols="30" name="q19"></textarea><br>
            <h4>C. Clothing</h4><br>
            <label for="q20">Talk with your mentor to see how much they spend on clothing. Think about how much you
            spend on clothing each year. To determine your monthly clothing budget, take the total 
            and divide by 12.</label><br>
            <textarea id="q20" rows="1" cols="30" name="q20"></textarea><br>
            <h4>D. Food and Necessities</hr><br>
            <label>Personal items like soap, shampoo, deodorant, etc., as well as cleaning supplies, toilet paper, 
            and paper towels.<br> Use the information below to determine your food budget:<br>
            Budget the following for food PER WEEK:
            Thrifty food plan = $36.60, Low-cost food plan = $47.30 Moderate-cost food plan = $58.50 
            Liberal food plan = $71.60</label><br>
            <label for="q21">Monthly Food Costs</label><br>
            <textarea id="q21" rows="1" cols="30" name="q21"></textarea><br>
            <label for="q22">Monthly Necessities Costs</label><br>
            <textarea id="q22" rows="1" cols="30" name="q22"></textarea><br>
            <label for="q23">Total Food & Necessities Costs</label><br>
            <textarea id="q23" rows="1" cols="30" name="q23"></textarea><br>
            <h4>E. Recreation and Entertainment</h4><br>
            <label>You need recreation and entertainment to make life fun. Things to consider when calculating 
            your monthly budget are: dining out, entertaining friends, movies, concerts, sporting events, 
            books, newspapers, magazines, music, videos, and hobbies.</label><br>
            <label for="q24">Total Monthly Recreation and Entertainment Costs</label><br>
            <textarea id="q24" rows="1" cols="30" name="q24"></textarea><br>
            <label>Enter the monthly amounts from each of these categories:</label><br>
            <label for="q25">How much money do you need to earn in a year to live your desired lifestyle?</label><br>
            <textarea id="q25" rows="1" cols="30" name="q25"></textarea><br>
            <label for="q26">Housing</label><br>
            <textarea id="q26" rows="1" cols="30" name="q26"></textarea><br>
            <label for="q27">Transportation</label><br>
            <textarea id="q27" rows="1" cols="30" name="q27"></textarea><br>
            <label for="q28">Clothing</label><br>
            <textarea id="q28" rows="1" cols="30" name="q28"></textarea><br>
            <label for="q29">Food & Sundries</label><br>
            <textarea id="q29" rows="1" cols="30" name="q29"></textarea><br>
            <label for="q30">Recreation & Entertainment</label><br>
            <textarea id="q30" rows="1" cols="30" name="q30"></textarea><br>
            <label for="q31">Subtotal</label><br>
            <textarea id="q31" rows="1" cols="30" name="q31"></textarea><br>
            <label for="q32">Taxes (add 25%)</label><br>
            <textarea id="q32" rows="1" cols="30" name="q32"></textarea><br>
            <label for="q33">Total Monthly Living Costs</label><br>
            <textarea id="q33" rows="1" cols="30" name="q33"></textarea><br>
            <label for="q34">Multiply by 12 Months</label><br>
            <textarea id="q34" rows="1" cols="30" name="q34"></textarea><br>
            <label for="q35">Annual Income Needed</label><br>
            <textarea id="q35" rows="1" cols="30" name="q35"></textarea><br>

            <button onclick="myFunction()" type="submit" style ="float:right" name='submit'>Submit</button>

            <script>
                function myFunction() {
                    alert("CAOA Worksheet 4 has been submitted!");
                }
            </script>
        </form>
        <h3>***Note: This does not include health(medical insurance, eye glasses, 
        prescription medication, ect), child care, savings,
        retirement and miscellaneous expenses.***</h3>
        <p>&copy; 2009 Career Analysis Organization of America,Corp / Career Analysis Academy Programing</p>
    </body>
</html>