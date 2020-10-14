<?php
$connString = "mysql:host=localhost;dbname=Users";
$user = "CAOA";
$password = "CAOA2020!";

$pdo = new PDO($connString,$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();


?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="utf-8">
    <title>Career Analysis Academy</title>
    
    <link rel="stylesheet" href="../CSS/LoginPage.css" />
   
</head>

<body>
    <header>Make Your Future Yours<br><p class = "sponsor">Sponsored by Career Analysis Organization of America</p></header>
    <br>

    <div class="topnav">
        <a href="TypeOfLogin.html">Sign Up</a>
    </div>

    <br>

    <div class = "container">
        <p class = "Login">—Login—</p>
        <div class = "form">
        <form method="POST" action="" id="mainForm" class="mainForm">
            <label for = "username">Username:</label>
            <input type = "text" id = "username" class="required" name = "username">
            <br>
            <label for = "password">  Password: </label>
            <input type = "password" id = "password" class="required" name = "password">
            <br>
            <div id = "lower">
                <br>
                <input type = "checkbox"><label>Remember me</label>
                <br>
                
                <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        
                        if (isset($_POST["username"]) && isset($_POST["password"]))
                        {
                            $Username = $_POST["username"];
                            $Password = $_POST["password"];
                            
                            try {
                                
                                $sql = "SELECT Username, Password, Teacher FROM `Login_Users` WHERE Username='$Username' AND Password='$Password'"; 
                                $result = $pdo->prepare($sql); 
                                $result->execute(); 

                                $finalresult = $result->fetch(PDO::FETCH_ASSOC);
                            
                                $USER = 'Username';
                                $PASS = 'Password';
                                $FIRST = 'First Name';
                                $LAST = 'Last Name';
                                $TEACHER = 'Teacher';
                                
                                if($finalresult[$USER] == $Username && $finalresult[$PASS] == $Password)
                                {
                                    $sqlName = "SELECT `First Name`,`Last Name`, `Teacher` FROM `Login_Users` WHERE `Username`='$Username'"; 
                                    $resultName = $pdo->prepare($sqlName); 
                                    $resultName->execute(); 

                                    $finalresultName = $resultName->fetch(PDO::FETCH_ASSOC);
                                    
                                    $_SESSION['users'] = $Username;
                                    $_SESSION['firstname'] = $finalresultName[$FIRST];
                                    $_SESSION['lastname'] = $finalresultName[$LAST];
                                    $_SESSION['teacher'] = $finalresultName[$TEACHER];
                                    
                                    header('Location: ProfilePage.php'); 
                                   
                                   
                                }
                                else {
                                    try {
                                
                                        $sql = "SELECT Username, Password FROM `Teacher` WHERE Username='$Username' AND Password='$Password'"; 
                                        $result = $pdo->prepare($sql); 
                                        $result->execute(); 

                                        $finalresult = $result->fetch(PDO::FETCH_ASSOC);
                            
                                        $USER = 'Username';
                                        $PASS = 'Password';
                                        $TITLE = 'Title';
                                        $LAST = 'Last Name';
                                
                                        if($finalresult[$USER] == $Username && $finalresult[$PASS] == $Password)
                                        {
    
                                            $sqlTitle = "SELECT `Title`,`Last Name` FROM `Teacher` WHERE `Username`='$Username'"; 
                                            $resultTitle = $pdo->prepare($sqlTitle); 
                                            $resultTitle->execute(); 

                                            $finalresultTitle = $resultTitle->fetch(PDO::FETCH_ASSOC);
                                    
                                            $_SESSION['users'] = $Username;
                                            $_SESSION['title'] = $finalresultTitle[$TITLE];
                                            $_SESSION['lastname'] = $finalresultTitle[$LAST];
                                            $_SESSION['isTeacher'] = 'True';
                                            header('Location: TeacherProfilePage.php');
                                   
                                        }
                                        else {
                                            echo "<script>alert('Username or Password was incorrect');</script>";
                                        }

                                    }
                                    catch (PDOException $e) {
                                        die( $e->getMessage() );
                                    }
                                }
                            }
                            catch (PDOException $e) {
                                die( $e->getMessage() );
                            }
                        } 
                    }

                    ?>
                
                <input type="submit" name="submit" value="LOGIN"/>
        </div>
    </div>

    <br>
    <br>
    <section>
        <div class = "bottom"> 

            <footer>Founded by Career Analysis Organization of America</footer>
            
        </div>
    </section>
    

   
    

</body>

</html>




