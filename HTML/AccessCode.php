<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Career Analysis Academy</title>
    <link rel="stylesheet" href="../CSS/HomePage.css">
</head>
<header>Career Analysis Academy</header>


<div class = "container">
        <form method="POST" action="">
            <p>Please enter your Teacher Access code</p>
            <p>before continuing to make an account</p>
            <p>
            <label for ="AccessCode">Access Code: </label>
            <input type = "text" id = "AccessCode" name="AccessCode" />
            </p>
        
        
        <?php
        
        
            $AccessCode = $_POST['AccessCode'];
            $_SESSION['AccessCode'] = $AccessCode;
            
            if($AccessCode == "CAOA2020"){
                echo "<script>alert('Access Code was correct')</script>";
                header('Location: SignUpTeacher.php');
            }
            
        ?>
        <input type="submit" value="Create Account"/>
        </form>
        
        
        <footer>Founded by Career Analysis of America</footer>
</div>



</html>