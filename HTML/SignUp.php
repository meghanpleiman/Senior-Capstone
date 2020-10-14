<?php
$connString = "mysql:host=localhost;dbname=Users";
$user = "CAOA";
$password = "CAOA2020!";

$pdo = new PDO($connString,$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
session_start();
?>

<?php
            
                    if ($_SERVER["REQUEST_METHOD"] == "POST")
                    {
                        $FirstName = $_POST["firstname"];
                        $LastName = $_POST["lastname"];
                        $Gender = $_POST["gender"];
                        $Address = $_POST["address"];
                        $Birthday = $_POST["birthday"];
                        $School = $_POST["school"];
                        $Race = $_POST["race"];
                        $IncomeBracket = $_POST["income"];
                        $Username = $_POST["username"];
                        $Password = $_POST["password"];
                        $ConfirmPassword = $_POST["confirmpassword"];
                        $Teacher = $_POST["teacher"];
                        
                        $count = $pdo->query("SELECT Count(*) FROM `Login_Users` WHERE Username = '$Username'")->fetchColumn();
                        
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
                                    $sql = "INSERT INTO Login_Users(`First Name`,`Last Name`,`Gender`, `Address`, `Birthday`, `School`,`Race`, `Income Bracket`,`Username`, `Password`, `Confirm Password`, `Teacher`) 
                                    VALUES ('$FirstName', '$LastName','$Gender', '$Address','$Birthday', '$School', '$Race', '$IncomeBracket', '$Username', '$Password', '$ConfirmPassword', '$Teacher')";

                                    $result = $pdo->prepare($sql); 
                                    $result->execute();
        
                                }
                                catch (PDOException $e) {
                                    die( $e->getMessage() );
                                }
                            
                                $_SESSION['users'] = $Username;
                                $_SESSION['firstname'] = $FirstName;
                                $_SESSION['lastname'] = $LastName;
                                $_SESSION['teacher'] = $Teacher;
                                header("Location: BuildCharacter.php");
                                
                            }
                        
                        }
                        
                        
                        
                        
                        
                    }
                    
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
        <h3>Create an Account:</h3>
        
        <form method="POST" action="" id="mainForm">
            <label for = "firstname">First Name: </label>
            <input type = "text" class="required" id = "firstname" name = "firstname"><br><br>
            <label for = "lastname">Last Name: </label>
            <input type = "text" class="required" id = "lastname" name = "lastname"><br><br>
            <div>
                <label for = "gender">Gender: </label>
                <select id = "gender" name = "gender">
                    <option>Female</option>
                    <option>Male</option>
                </select><br><br>
            </div>
            <label for = "address">Address: </label>
            <input type = "text" class="required" id = "address" name = "address"><br><br>
            <label for = "birthday">Birthday: </label>
            <input type = "date" class="required" id = "birthday" name = "birthday"><br><br>
            <label for = "school">School: </label>
            <input type = "text" class="required" id = "school" name = "school"><br><br>
            <div>
                    <label for = "race">Race: </label>
                    <select id="race" name="race">
                        <option>American Indian or Alaska Native</option>  
                        <option>Asian</option> 
                        <option>Black or African American</option>     
                        <option>Hispanic, Latino, or Spanish origin</option>
                        <option>Middle Eastern or North African</option>
                        <option>Native Hawaiian or Other Pacific Islander</option>
                        <option>White</option>
                        <option>Other race</option>
                    </select><br><br>
            </div>
            <div>
                    <label for = "income">Income Bracket: </label>
                    <select id="income" name="income">
                        <option>0-24,999</option>  
                        <option>25,000-49,999</option> 
                        <option>50,000-74,999</option>     
                        <option>75,000-99,999</option>
                        <option>100,000+</option>
                    </select><br><br>
            </div>
            <label for = "username">Username: </label>
            <input type = "text" class="required" id = "username" name = "username"><br><br>
            <label for = "password">Password:</label>
            <input type = "password" class="required" id = "password" name = "password"><br><br>
            <label for = "confirmpassword">Confirm Password:</label>
            <input type = "password" class="required" id = "confirmpassword" name = "confirmpassword"><br><br>
            <div>
                <label for = "teacher">Teacher: </label>
                <select id="teacher" name="teacher">
                <?php 

                    $sqlTeacher = $pdo->query("SELECT * FROM `Teacher`");
                        while ($row = $sqlTeacher->fetch(PDO::FETCH_ASSOC)){
                            echo "<option value='" . $row['Title']. $row['Last Name'] . "'>" . $row['Title']. $row['Last Name'] . "</option>";
                        }
                        
                ?>
                </select>
            </div>
            
            
            <input type="submit" value="Create Account"/><br><br>
        </form>
    </div>
</body>
</html>