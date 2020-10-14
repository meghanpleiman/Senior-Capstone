<?php
    
    session_start();
    
    if(empty($_SESSION['users']))
    {
        header("Location: LoginPage.php");
        die("Redirecting to LoginPage.php");
    }

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>Virtual Life</title>
        <link rel="stylesheet" href="../CSS/VirtualLife.css">
    </head>


    <header>
            <h1>My Virtual Life</h1>
    </header>
    
    <div class="tabs">
        <a href="#" class="tablinks" onclick="window.location.href = 'ProfilePage.php';">Profile</a>
        <a href="#" class="tablinks" onclick="window.location.href = 'WorksheetPage.php';">Worksheets</a>
        <a href="#" class="tablinks" onclick="window.location.href = 'CareerPathway.php';">Career Pathway</a>
        <a href="#" class="tablinks" onclick="window.location.href = 'VirtualLife.php';">Virtual Life</a>
        <a href="#" class="tablinks" onclick="window.location.href = 'HomePage.html';">Logout</a>
    </div>
    
    <body>
        <div class="center">
            <h3>—Change Your Character—</h3>
            <br><br><br>
            <br><br><br>
            <section1>
                <select id="Sex">
                    <option value='0'>Gender?</option>
                    <option value='1'>Male</option>
                    <option value='2'>Female</option>
                </select>
                <select id="SkinColor">
                    <option value='0'>Skin Color?</option>
                    <option value='tan'>1</option>
                    <option value='tanner'>2</option>
                    <option value='lightbrown'>3</option>
                    <option value='black'>4</option>
                </select>
                <select id="HairColor">
                    <option value='0'>Hair Color?</option>
                    <option value='1'>yellow</option>
                    <option value='2'>brown</option>
                    <option value='3'>orange</option>
                    <option value='4'>dark brown</option>
                    <option value='5'>black</option>
                </select>
                <select id="ShirtColor">
                    <option value='0'>Shirt Color?</option>
                    <option value='1'>red</option>
                    <option value='2'>blue</option>
                    <option value='3'>purple</option>
                    <option value='4'>green</option>
                    <option value='5'>pink</option>
                </select>
            </section1>
            <br>
            <br>
            <br>
            <br>
            <button class= "button" onclick="showPicture()">Generate</button>
            <br><br><br><br>
            <section2>
                <img style="display:none;" id="character" src="character" />
            </section2>
            <?php
            
            if(isset($_SESSION['AccessCode']))
            {
            ?>  
                <form action="TeacherProfilePage.php">
                    <input type="submit" value="SAVE"/>
                </form>
            <?php
            } else {
            ?>
                <form action="ProfilePage.php">
                    <input type="submit" value="SAVE"/>
                </form>
            <?php
            }
            
            ?>
            <br>
        </div>  
        
        <script type="text/javascript">
                function showPicture(){
                    var obj = document.getElementById("Sex");
                    var obj1 = document.getElementById("SkinColor");
           			var obj2 = document.getElementById("HairColor");
                    var obj3 = document.getElementById("ShirtColor");
        
                    if (obj.value=='1'){
                        if (obj1.value=='tan'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tan/MTanBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                        if (obj1.value=='tanner'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Tanner/MTannerBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                        if (obj1.value=='lightbrown'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MTannerYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MTannerLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MTannerOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MTannerDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MLBBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/LightBrown/MTannerBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                        if (obj1.value=='black'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Male/Black/MDBBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                    }
                    if (obj.value=='2'){
                        if (obj1.value=='tan'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tan/FTanBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                        if (obj1.value=='tanner'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Tanner/FTannerBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                        if (obj1.value=='lightbrown'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/LightBrown/FLBBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                        if (obj1.value=='black'){
                            if (obj2.value=='1'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBYellowR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBYellowB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBYellowPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBYellowG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBYellowP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='2'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBLBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBLBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBLBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBLBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBLBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='3'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBOrangeR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBOrangeB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBOrangePP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBOrangeG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBOrangeP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='4'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBDBR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBDBB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBDBPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBDBG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBDBP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                            if (obj2.value=='5'){
                                if (obj3.value=='1'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBBlackR.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='2'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBBlackB.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='3'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBBlackPP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='4'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBBlackG.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                                if (obj3.value=='5'){
                                    var sourceOfPicture = "../Images/People/Female/Black/FDBBlackP.png";
                                    var img = document.getElementById('character');
                                    img.src = sourceOfPicture.replace('90x90', '225x225');
                                    img.style.display = "block";
                                }
                            }
                        }
                    }
                }
        </script>
    </body>
</html>
