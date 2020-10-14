<?php
$connString = "mysql:host=localhost;dbname=Users";
$user = "CAOA";
$password = "CAOA2020!";

$pdo = new PDO($connString,$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../CSS/signUp.css" />
    <link rel="stylesheet" href="../CSS/HeaderCSS.css" />
    <script src="CreateAccount.js" type="text/JavaScript"></script>
    
</head>
<header>
    <h1>Career Analysis Academy</h1>
</header>
<body>

            <div class = "container">
            
                <h3>Create a Teacher Account:</h3>

                <form method="POST" action="" id="mainForm">
                    <label for = "firstname">First Name: </label>
                    <input type = "text" class="required" id = "firstname" name = "firstname"><br><br>
                    <label for = "lastname">Last Name: </label>
                    <input type = "text" class="required" id = "lastname" name = "lastname"><br><br>
                    <label for = "school">School: </label>
                    <input type = "text" class="required" id = "school" name = "school"><br><br>
                    <div>
                            <label for = "title">Title: </label>
                            <select id="title" name="title">
                                <option>Mr.</option>  
                                <option>Miss</option> 
                                <option>Mrs.</option>     
                                <option>Ms.</option>
                            </select><br><br>
                    </div>
                    
                    <label for = "username">Username: </label>
                    <input type = "text" class="required" id = "username" name = "username"><br><br>
                    <label for = "password">Password:</label>
                    <input type = "password" class="required" id = "password" name = "password"><br><br>
                    <label for = "confirmpassword">Confirm Password:</label>
                    <input type = "password" class="required" id = "confirmpassword" name = "confirmpassword"><br><br>
                    
                    <?php
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        $FirstName = $_POST["firstname"];
                        $LastName = $_POST["lastname"];
                        $School = $_POST["school"];
                        $Title = $_POST["title"];
                        $Username = $_POST["username"];
                        $Password = $_POST["password"];
                        $ConfirmPassword = $_POST["confirmpassword"];
                        
                        $count = $pdo->query("SELECT Count(*) FROM `Teacher` WHERE Username = '$Username'")->fetchColumn();
                        
                        if($count > 1){
                            echo "<script>alert('That username is already taken, please choose another one.')</script>";
                        }
                        else {
                            
                            if ($Password != $ConfirmPassword)
                            {
                                echo("The two password fields do not match.");
                            }

                            else
                            {
                                try {
                                    $sql = "INSERT INTO Teacher(`First Name`,`Last Name`, `School`, `Title`, `Username`, `Password`, `Confirm Password`)
                                    VALUES ('$FirstName', '$LastName', '$School', '$Title', '$Username', '$Password', '$ConfirmPassword')";
                                
                                    $result = $pdo->prepare($sql); 
                                    $result->execute();
        
                                }
                                catch (PDOException $e) {
                                    die( $e->getMessage() );
                                }
                            
                                $_SESSION['users'] = $Username;
                                $_SESSION['title'] = $Title;
                                $_SESSION['lastname'] = $LastName;
                                $_SESSION['isTeacher'] = 'True';
                                header('Location: BuildCharacter.php');
                            }
                        
                        }
                        
                        
                        
                        
                        
                    }
                    
                    ?>
                    <input type="submit" value="Create Account"/><br><br>
                </form>
            </div>
</body>    
</html>