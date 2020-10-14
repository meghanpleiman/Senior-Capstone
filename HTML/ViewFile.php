<?php

    $connString = "mysql:host=localhost;dbname=Users";
    $user = "CAOA";
    $password = "CAOA2020!";

    $pdo = new PDO($connString,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $FileName = isset($_GET['FileName'])? $_GET['FileName'] : "";
    $WorksheetNumber = isset($_GET['Worksheet'])? $_GET['Worksheet'] : "";
    $fileSQL = $pdo->prepare("SELECT * FROM `Worksheet $WorksheetNumber Answers` where `FileName`=?");
    $fileSQL->bindParam(1, $FileName);
    $fileSQL->execute();
    $row = $fileSQL->fetch();
    header('Content-Type:' .$row['FileType']);
    header('Content-Disposition: inline');
    $worksheet = "Worksheet $WorksheetNumber -1 File";
    echo $row[$worksheet];


?>