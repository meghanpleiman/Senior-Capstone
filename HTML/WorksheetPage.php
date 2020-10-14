<?php
    
    session_start();
    
    if(empty($_SESSION['users']))
    {
        header("Location: LoginPage.php");
        die("Redirecting to LoginPage.php");
    }
    
    $submission = "Please complete the selected worksheet";
    
    function worksheetPretest(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sql = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $result = $pdo->prepare($sql); 
        $result->execute();
        $count = $result->rowCount();
        
        if ($count == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    
    function worksheet1(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        if ($countPretest == 1 && $countOne == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);

            
        } else if ($countPretest == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    function worksheet2(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    
    function worksheet3(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    function worksheet4(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        $sqlFour = "SELECT `First Name` FROM `Worksheet 4 Answers` WHERE `First Name`= '$Student'";
        $resultFour = $pdo->prepare($sqlFour); 
        $resultFour->execute();
        $countFour = $resultFour->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 1 && $countFour == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0 || $countThree == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    
    function worksheet5(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        $sqlFour = "SELECT `First Name` FROM `Worksheet 4 Answers` WHERE `First Name`= '$Student'";
        $resultFour = $pdo->prepare($sqlFour); 
        $resultFour->execute();
        $countFour = $resultFour->rowCount();
        
        $sqlFive = "SELECT `First Name` FROM `Worksheet 5 Answers` WHERE `First Name`= '$Student'";
        $resultFive = $pdo->prepare($sqlFive); 
        $resultFive->execute();
        $countFive = $resultFive->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 1 && $countFour == 1 && $countFive == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0 || $countThree == 0 || $countFour == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    function worksheet6(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        $sqlFour = "SELECT `First Name` FROM `Worksheet 4 Answers` WHERE `First Name`= '$Student'";
        $resultFour = $pdo->prepare($sqlFour); 
        $resultFour->execute();
        $countFour = $resultFour->rowCount();
        
        $sqlFive = "SELECT `First Name` FROM `Worksheet 5 Answers` WHERE `First Name`= '$Student'";
        $resultFive = $pdo->prepare($sqlFive); 
        $resultFive->execute();
        $countFive = $resultFive->rowCount();
        
        $sqlSix = "SELECT `First Name` FROM `Worksheet 6 Answers` WHERE `First Name`= '$Student'";
        $resultSix = $pdo->prepare($sqlSix); 
        $resultSix->execute();
        $countSix = $resultSix->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 1 && $countFour == 1 && $countFive == 1 && $countSix == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0 || $countThree == 0 || $countFour == 0 || $countFive == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    
    function worksheet7(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        $sqlFour = "SELECT `First Name` FROM `Worksheet 4 Answers` WHERE `First Name`= '$Student'";
        $resultFour = $pdo->prepare($sqlFour); 
        $resultFour->execute();
        $countFour = $resultFour->rowCount();
        
        $sqlFive = "SELECT `First Name` FROM `Worksheet 5 Answers` WHERE `First Name`= '$Student'";
        $resultFive = $pdo->prepare($sqlFive); 
        $resultFive->execute();
        $countFive = $resultFive->rowCount();
        
        $sqlSix = "SELECT `First Name` FROM `Worksheet 6 Answers` WHERE `First Name`= '$Student'";
        $resultSix = $pdo->prepare($sqlSix); 
        $resultSix->execute();
        $countSix = $resultSix->rowCount();
        
        $sqlSeven = "SELECT `First Name` FROM `Worksheet 7 Answers` WHERE `First Name`= '$Student'";
        $resultSeven = $pdo->prepare($sqlSeven); 
        $resultSeven->execute();
        $countSeven = $resultSeven->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 1 && $countFour == 1 && $countFive == 1 && $countSix == 1 && $countSeven == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0 || $countThree == 0 || $countFour == 0 || $countFive == 0 || $countSix == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    function worksheet8(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        $sqlFour = "SELECT `First Name` FROM `Worksheet 4 Answers` WHERE `First Name`= '$Student'";
        $resultFour = $pdo->prepare($sqlFour); 
        $resultFour->execute();
        $countFour = $resultFour->rowCount();
        
        $sqlFive = "SELECT `First Name` FROM `Worksheet 5 Answers` WHERE `First Name`= '$Student'";
        $resultFive = $pdo->prepare($sqlFive); 
        $resultFive->execute();
        $countFive = $resultFive->rowCount();
        
        $sqlSix = "SELECT `First Name` FROM `Worksheet 6 Answers` WHERE `First Name`= '$Student'";
        $resultSix = $pdo->prepare($sqlSix); 
        $resultSix->execute();
        $countSix = $resultSix->rowCount();
        
        $sqlSeven = "SELECT `First Name` FROM `Worksheet 7 Answers` WHERE `First Name`= '$Student'";
        $resultSeven = $pdo->prepare($sqlSeven); 
        $resultSeven->execute();
        $countSeven = $resultSeven->rowCount();
        
        $sqlEight = "SELECT `First Name` FROM `Worksheet 8 Answers` WHERE `First Name`= '$Student'";
        $resultEight = $pdo->prepare($sqlEight); 
        $resultEight->execute();
        $countEight = $resultEight->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 1 && $countFour == 1 && $countFive == 1 && $countSix == 1 && $countSeven == 1 && $countEight == 0){
            
           $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0 || $countThree == 0 || $countFour == 0 || $countFive == 0 || $countSix == 0 || $countSeven == 0) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
    
    
    function worksheet9(){
        
        $connString = "mysql:host=localhost;dbname=Users";
        $user = "CAOA";
        $password = "CAOA2020!";
    
        $pdo = new PDO($connString,$user,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        
        $Student = $_SESSION['users'];
        $sqlPretest = "SELECT `First Name` FROM `Worksheet Pretest Answers` WHERE `First Name`= '$Student'";
        $resultPretest = $pdo->prepare($sqlPretest); 
        $resultPretest->execute();
        $countPretest = $resultPretest->rowCount();
        
        $sqlOne = "SELECT `First Name` FROM `Worksheet 1 Answers` WHERE `First Name`= '$Student'";
        $resultOne = $pdo->prepare($sqlOne); 
        $resultOne->execute();
        $countOne = $resultOne->rowCount();
        
        $sqlTwo = "SELECT `First Name` FROM `Worksheet 2 Answers` WHERE `First Name`= '$Student'";
        $resultTwo = $pdo->prepare($sqlTwo); 
        $resultTwo->execute();
        $countTwo = $resultTwo->rowCount();
        
        $sqlThree = "SELECT `First Name` FROM `Worksheet 3 Answers` WHERE `First Name`= '$Student'";
        $resultThree = $pdo->prepare($sqlThree); 
        $resultThree->execute();
        $countThree = $resultThree->rowCount();
        
        $sqlFour = "SELECT `First Name` FROM `Worksheet 4 Answers` WHERE `First Name`= '$Student'";
        $resultFour = $pdo->prepare($sqlFour); 
        $resultFour->execute();
        $countFour = $resultFour->rowCount();
        
        $sqlFive = "SELECT `First Name` FROM `Worksheet 5 Answers` WHERE `First Name`= '$Student'";
        $resultFive = $pdo->prepare($sqlFive); 
        $resultFive->execute();
        $countFive = $resultFive->rowCount();
        
        $sqlSix = "SELECT `First Name` FROM `Worksheet 6 Answers` WHERE `First Name`= '$Student'";
        $resultSix = $pdo->prepare($sqlSix); 
        $resultSix->execute();
        $countSix = $resultSix->rowCount();
        
        $sqlSeven = "SELECT `First Name` FROM `Worksheet 7 Answers` WHERE `First Name`= '$Student'";
        $resultSeven = $pdo->prepare($sqlSeven); 
        $resultSeven->execute();
        $countSeven = $resultSeven->rowCount();
        
        $sqlEight = "SELECT `First Name` FROM `Worksheet 8 Answers` WHERE `First Name`= '$Student'";
        $resultEight = $pdo->prepare($sqlEight); 
        $resultEight->execute();
        $countEight = $resultEight->rowCount();
        
        $sqlNine = "SELECT `First Name` FROM `Worksheet 9 Answers` WHERE `First Name`= '$Student'";
        $resultNine = $pdo->prepare($sqlNine); 
        $resultNine->execute();
        $countNine = $resultNine->rowCount();
        
        if ($countPretest == 1 && $countOne == 1 && $countTwo == 1 && $countThree == 1 && $countFour == 1 && $countFive == 1 && $countSix == 1 && $countSeven == 1 && $countEight == 1 && $countNine == 0){
            
            $GLOBALS['submission'] = "Please complete the selected worksheet";
            echo($GLOBALS['submission']);
            
        } else if ($countPretest == 0 || $countOne == 0 || $countTwo == 0 || $countThree == 0 || $countFour == 0 || $countFive == 0 || $countSix == 0 || $countSeven == 0 || $countEight == 1) {
            $GLOBALS['submission'] = "Please complete all worksheets in order before attempting this one";
            echo($GLOBALS['submission']);
        }
        else {
            $GLOBALS['submission'] = "This worksheet has already been submitted.";
            echo($GLOBALS['submission']);

        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Worksheets</title>
        <link rel="stylesheet" href="../CSS/WorksheetPage.css">
        <link rel="stylesheet" href="../CSS/HeaderCSS.css">
        <link rel="stylesheet" href="../CSS/Chat.css">
        <script>
            function openForm() {
            document.getElementById("myForm").style.display = "block";}

            function closeForm() {
            document.getElementById("myForm").style.display = "none";
            }

        </script>
    </head>
    
    <header>
            <h1>Worksheets</h1>
    </header>
        
    <div class="tabs">
            <a href="#" class="tablinks" onclick="window.location.href = 'ProfilePage.php';">Profile</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'WorksheetPage.php';">Worksheets</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'CareerPathway.php';">Career Pathway</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'VirtualLife.php';">Virtual Life</a>
            <a href="#" class="tablinks" onclick="window.location.href = 'HomePage.html';">Logout</a>
    </div>
        
    <body>
        <img src = "../Images/Street.png">
        <button onClick="onClickPretest()"class = "TypeOne" id = "btnone">Pretest</button>
        <button onClick="onClickOne()" class = "TypeTwo" id = "btntwo">Worksheet 1</button>
        <button onClick="onClickTwo()" class = "TypeThree" id = "btnthree">Worksheet 2</button>
        <button onClick="onClickThree()" class = "TypeFour" id = "btnfour">Worksheet 3</button>
        <button onClick="onClickFour()" class = "TypeThree" id = "btnfive">Worksheet 4</button>
        <button onClick="onClickFive()" class = "TypeTwo" id = "btnsix">Worksheet 5</button>
        <button onClick="onClickSix()" class = "TypeOne" id = "btnseven">Worksheet 6</button>
        <button onClick="onClickSeven()" class = "TypeTwo" id = "btneight">Worksheet 7</button>
        <button onClick="onClickEight()" class = "TypeThree" id = "btnnine">Worksheet 8</button>
        <button onClick="onClickNine()" class = "TypeFour" id = "btnten">Worksheet 9</button>
        <button id="popup" onclick="openForm()">Chat</button>
        <div class="chat-popup" id="myForm" style = "display:none">
            <form action="post" class="form-container">
                <label for="msg"><b>Message</b></label>
                <textarea placeholder="Type message.." name="msg" required></textarea>
                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        
        
        <script>
        
            function onClickPretest() {
                alert("<?php echo worksheetPretest()?>");
                var submitted = "<?php echo $submission ?>";

                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Pretest.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
                
            }
            
            function onClickOne() {
                alert("<?php echo worksheet1() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet1.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickTwo() {
                alert("<?php echo worksheet2() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet2.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickThree() {
                
                alert("<?php echo worksheet3() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet3.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickFour() {
                alert("<?php echo worksheet4() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet4.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickFive() {
                alert("<?php echo worksheet5() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet5.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickSix() {
                alert("<?php echo worksheet6() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet6.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickSeven() {
                alert("<?php echo worksheet7() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet7.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickEight() {
                alert("<?php echo worksheet8() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet8.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
            
            function onClickNine() {
                alert("<?php echo worksheet9() ?>");
                var submitted = "<?php echo $GLOBALS['submission'] ?>";
                if (submitted == "Please complete the selected worksheet") {
                    window.location.href = "Worksheet9.php";
                }
                else {
                    window.location.href = "WorksheetPage.php";
                }
            }
        </script>

    </body>
</html>