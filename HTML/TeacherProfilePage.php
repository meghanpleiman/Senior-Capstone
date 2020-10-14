<?php
    $connString = "mysql:host=localhost;dbname=Users";
    $user = "CAOA";
    $password = "CAOA2020!";

    $pdo = new PDO($connString,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $lastname = 'lastname';
    $title = 'title';
    $users = 'users';
    
    
    session_start();

   

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link rel="stylesheet" href="../CSS/ProfilePage.css" />
</head>
<header>
    <h1>Welcome 
    <?php
    
    echo "$_SESSION[$users]" . "!";
    
    ?>
    
    
    </h1>
</header>

<br>

<div class="tabs">
    <a href="#" onclick="window.location.href = 'TeacherProfilePage.php';">Profile</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'WorksheetPageTeachers.php';">Worksheets</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'CareerPathway.php';">Career Pathway</a>
    <a href="#" class="tablinks" onclick="window.location.href = 'Logout.php';" >Logout</a>
</div>

<br>

<body>
    
<?php
 
try {
    $sql = "SELECT `Title`,`Last Name` FROM `Teacher` WHERE Username = '$_SESSION[$users]'";
    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    $row = $q->fetch();
    
    $Title = $row['Title'];
    $Last = $row['Last Name'];
    $TeacherName = $Title.$Last;
    
    $sqlAnswers = "SELECT * FROM `Login_Users` WHERE Teacher='$TeacherName'";
    $qAnswers = $pdo->query($sqlAnswers);
    $qAnswers->setFetchMode(PDO::FETCH_ASSOC);
    
    } catch (PDOException $e) {
        die("Could not connect to the database Users :" . $e->getMessage());
    }
?>
    <h1>Students</h1>
            <table class="table table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Pretest</th>
                        <th>Worksheet 1</th>
                        <th>Worksheet 2</th>
                        <th>Worksheet 3</th>
                        <th>Worksheet 4</th>
                        <th>Worksheet 5</th>
                        <th>Worksheet 6</th>
                        <th>Worksheet 7</th>
                        <th>Worksheet 8</th>
                        <th>Worksheet 9</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $qAnswers->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['First Name']);?></td>
                            <td><?php echo htmlspecialchars($row['Last Name']);?></td>
                            
                            <td><button onClick="onClick(this.id)" id="<?php echo htmlspecialchars($row['Last Name'].'_'.$row['First Name'].'_Pretest')?>" name = 'WorksheetButton'>Pretest</a></button></td>
                            <?php for($i = 1; $i <= 9; $i++)  { ?> 
                                <td><button type="button" onClick="onClick(this.id)" id="<?php echo htmlspecialchars($row['Last Name'].'_'.$row['First Name'].'_'.$i)?>" name = 'WorksheetButton'>Worksheet <?php echo $i ?></a></button></td>
                            <?php } ?>
                            <?php endwhile; ?>
                        </tr>
                        
                        <script>
                            function onClick(clicked_id) {
                                var click = clicked_id.split("_");
                                if (click[2] == ("Pretest")){
                                    location.href = 'WorksheetAnswersPretest.php?student=' + clicked_id; 
                                } else if (click[2] == ("1")){
                                    location.href = 'WorksheetAnswers1.php?student=' + clicked_id; 
                                } else if (click[2] == ("2")){
                                    location.href = 'WorksheetAnswers2.php?student=' + clicked_id; 
                                } else if (click[2] == ("3")){
                                    location.href = 'WorksheetAnswers3.php?student=' + clicked_id; 
                                } else if (click[2] == ("4")){
                                    location.href = 'WorksheetAnswers4.php?student=' + clicked_id; 
                                } else if (click[2] == ("5")){
                                    location.href = 'WorksheetAnswers5.php?student=' + clicked_id; 
                                } else if (click[2] == ("6")){
                                    location.href = 'WorksheetAnswers6.php?student=' + clicked_id; 
                                } else if (click[2] == ("7")){
                                    location.href = 'WorksheetAnswers7.php?student=' + clicked_id; 
                                } else if (click[2] == ("8")){
                                    location.href = 'WorksheetAnswers8.php?student=' + clicked_id; 
                                } else if (click[2] == ("9")){
                                    location.href = 'WorksheetAnswers9.php?student=' + clicked_id; 
                                }
                                
                            }
                        </script>
                    
                </tbody>
            </table>
    </body>
</div>
</html>

        

</html>