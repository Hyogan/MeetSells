<?php

session_start();
$bdd = new PDO("mysql:host=localhost;dbname=MEETSELLS;charset=utf8","root","");
$errmsg = "";
    if(isset($_POST["submitSign"])){
        if(!empty($_POST["firstname"]) AND !empty($_POST["lastname"]) AND !empty($_POST["pseudo"]) AND !empty($_POST["email"]) AND !empty($_POST["phonenum"]) AND !empty($_POST["password"])){
            $sql = "INSERT INTO Users(firstname,lastname,pseudo,email,phoneNumber,userPassword) VALUES(? ,? ,?, ?,?, ?)";
            $name = $_POST["firstname"];
            $surname = $_POST["lastname"];
            $pseudo = $_POST["pseudo"];
            $email = $_POST["email"];
            $phonenum = $_POST["phonenum"];
            $password = ($_POST["password"]);
            
            $sql1 = "SELECT * FROM Users WHERE pseudo = ? or email = ?";
            $checkUnique = $bdd->prepare($sql1);
            $checkUnique->execute(array($pseudo,$email));
            $errmsg="";
            if($checkUnique->rowCount() > 0){
                $errmsg = "Pseudo or email already existant ! please change it !";
            }
            else{
                $insertMember = $bdd->prepare($sql);
                $insertMember->execute(array($name,$surname,$pseudo,$email,$phonenum,$password));
                $errmsg = "";    
                $recupUser = $bdd->prepare("SELECT * FROM Users WHERE pseudo = '?' AND userPassword = '?'");
                $recupUser->execute(array($pseudo,$password));
                $_SESSION["id"] = $recupUser->fetch()["userID"];
                $_SESSION["owner"] = 'admin';
                header("location:home.php");
            }
        }
    }

    if(isset($_POST["submitLog"])){
        
        if(!empty($_POST["usernamelog"]) AND !empty($_POST["passwordlog"])){
            $sql = "SELECT * FROM Users WHERE pseudo = ? AND userPassword = ?";
            $recupUser = $bdd->prepare($sql);
            $name = $_POST["usernamelog"];
            $pass = $_POST["passwordlog"];
            $recupUser->execute(array($name,$pass));
            if($recupUser->rowCount()>0){
                $errmsg = "";
                $_SESSION["id"] = $recupUser->fetch()["userID"];
                $_SESSION["owner"] = 'user';
                header("location:home.php");
            }
            else{
                $errmsg = "Inexistant users account for those two values !!";
            }
        } 
    }

    if(isset($_POST["submitAd"])){
        if(!empty($_POST['usernameAd']) AND !empty($_POST['passwordAd'])){
            $sql = "SELECT * FROM Administrators Where adminPseudo = ? AND adminPassword = ?";
            $adminpseudo = $_POST['usernameAd'];
            $adminpass = $_POST['passwordAd'];

            $recupAdmin = $bdd->prepare($sql);
            $recupAdmin->execute(array($adminpseudo,$adminpass));
            if($recupAdmin->rowCount() > 0){
                $errmsg = '';
                $_SESSION["id"] = $recupAdmin->fetch()["idAdmin"];
                $_SESSION["owner"] = 'admin';
                header("location:home.php");
            } 
            else{
                $errmsg = "Inexistant admin account for those two values";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" sizes="40x40" href="assets/logo/meetsells-logo-zip-file/png/logo-no-background.png">
        <link rel="stylesheet" href="style/sign-up-style.css">
        <title>MeetSeels</title>
    </head>
    <body>
        <header><div class="title">Welcome on MeetSeels</div></header>
        <main class="main-content" role="main">
            <nav>
                <img src="assets/logo/logo-no-background.png" alt="" id="logo-image">
                <h1 id="website-title"></h1>
                <ul>
                    <li class="sign-up-btn active nav-btn" onclick="styleItem('1')">Sign up</li>
                    <li class="login-btn nav-btn" onclick="styleItem('2')">Login</li>
                    <li class="logdad nav-btn" onclick="styleItem('3')">Administrator</li>
                </ul>
            </nav>
            <section class="sign-up">
                <form action="" method="post">
                    <label for="firstname"> Enter your first name : <input type="text" name="firstname" id="" required autocomplete="off"></label>
                    <label for="lastname"> Enter your last name : <input type="text" name="lastname" id="" required autocomplete="off"></label>
                    <label for="pseudo"> Enter your pseudo : <input type="text" name="pseudo" id="" required autocomplete="off"></label>
                    <label for="email"> Enter your e-mail address <input type="email" name="email" id="" required autocomplete="off" ></label>
                    <label for="phonenum">Enter your phone number with country code : <input type="number" name="phonenum" id="" required autocomplete="off" placeholder="ex : +237675100726"></label>
                    <label for="password">Enter a password : <input type="password" name="password" id="" required autocomplete="off"></label>
                    <div class="buttons">
                        <input type="submit" value="Submit" name="submitSign">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </section>
            <div class="error-msg"><?php  echo $errmsg?></div>
            <style>
                .error-msg{
                    color : red;
                    font-size : 18px;
                    font-weight : 600;
                }
            </style>
        </main>
        <script>

            const nav_btns = document.querySelectorAll(".nav_btn");
            const section_block = document.querySelector("main");
            const nav = `

            <nav>
                <img src="assets/logo/logo-no-background.png" alt="" id="logo-image">
                <h1 id="website-title"></h1>
                <ul>
                    <li class="sign-up-btn active nav-btn" onclick="styleItem('1')">Sign up</li>
                    <li class="login-btn nav-btn" onclick="styleItem('2')">Login</li>
                    <li class="logad nav-btn" onclick="styleItem('3')">Administrator</li>
                </ul>
            </nav>`;
            const section_sign_up = 
            `
            ${nav}
            <section class="sign-up">
                <form action="" method="post">
                    <label for="firstname"> Enter your first name : <input type="text" name="firstname" id="" required autocomplete="false"></label>
                    <label for="lastname"> Enter your last name : <input type="text" name="lastname" id="" required autocomplete="false"></label>
                    <label for="pseudo"> Enter your pseudo : <input type="text" name="pseudo" id="" required autocomplete="false"></label>
                    <label for="email"> Enter your e-mail address <input type="email" name="email" id="" required autocomplete="false"></label>
                    <label for="phonenum">Enter your phone number including country code : <input type="number" name="phonenum" id="" required autocomplete="false"></label>
                    <label for="password">Enter a password : <input type="password" name="password" id="" required autocomplete="false"></label>
                    <div class="buttons">
                        <input type="submit" value="Submit" name="submitSign">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </section>`
            const section_login = `
            ${nav}
            <section class="login">
                <h1 class="intro-text">Login as user</h1>
                <form action="" method="post">
                    <label for="usernamelog"> Enter your username <input type="text" name="usernamelog" id="" required></label>
                    <label for="passwordlog"> Enter your password <input type="password" name="passwordlog" id="" required></label>
                    <div class="buttons">
                        <input type="submit" value="Submit" name="submitLog">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </section>
            </section>`

            const section_log_add = `
            ${nav}
            <section class="login-admin">
                <h1 class="intro-text">Login as an administrator</h1>
                <form action="" method="post">
                    <label for="usernameAd"> Enter your admin username <input type="text" name="usernameAd" id="" required></label>
                    <label for="passwordAd"> Enter your password <input type="password" name="passwordAd" id="" required></label>
                    <div class="buttons">
                        <input type="submit" value="Submit" name="submitAd">
                        <input type="reset" value="Reset">
                    </div>
                </form>
            </section>`

             function removeAddClassList(className){
                     document.querySelector(".sign-up-btn").classList.remove("active");
                     document.querySelector(".login-btn").classList.remove("active");
                     document.querySelector(".logad").classList.remove("active");
                     document.querySelector(className).classList.add("active");
             }

            function styleItem(block_id){
                if(block_id == "1"){
                    // removeClassList(".sign-up-btn");
                    section_block.innerHTML = section_sign_up;
                    removeAddClassList(".sign-up-btn");
                }
                else if(block_id == "2"){
                    // removeClassList(".login-btn");
                    section_block.innerHTML = section_login;
                    removeAddClassList(".login-btn");
                }
                else if(block_id == "3"){
                    // removeClassList(".logad");
                    section_block.innerHTML = section_log_add;
                    removeAddClassList(".logad");
                }
            }




            const body = document.querySelector("body");
           const blocks_container  = document.querySelector("main");

            
           let k = 0;
           const arrayBackgrounds = [  
            "assets/images/accesories/analog-watch-1869928__340.jpg",
            "assets/images/tech/imac-g2f0067ecd_1920.png",
            "assets/images/tech/pexels-junior-teixeira-2047905.jpg",
            "assets/images/accesories/pexels-karol-d-325153.jpg",
            "assets/images/clothes/pexels-ksenia-chernaya-3965545.jpg",
            "assets/images/shoes/pexels-lil-artsy-1159670.jpg",
            "assets/images/shoes/pexels-melvin-buezo-2529148.jpg",
            "assets/images/clothes/pexels-pixabay-325876.jpg",
            "assets/images/tech/pexels-pixabay-4158.jpg",
            "assets/images/clothes/pexels-tembela-bohle-1884581.jpg",
            "assets/images/tech/pexels-tuur-tisseghem-812264.jpg",
            "assets/images/shoes/pexels-web-donut-19090.jpg",
            "assets/images/accesories/time-3091031_960_720.jpg",
            "christmas/christmas-tree-gd15b6d9bb_1280.jpg",
            "christmas/pexels-george-dolgikh-1303088.jpg",
            "christmas/pexels-toni-cuenca-695971.jpg",
            "assets/logo/meetsells-high-resolution-color-logo.png",
            ]
           

           function changeState(i){
                body.style.background = `url(${arrayBackgrounds[i]})`;
                body.style.backgroundRepeat = "no-repeat";
                body.style.backgroundSize = "100%";
                body.style.backgroundPosition = "center";
                body.style.transition="16s";
                body.style.transitionDuration = "1s";
                //header.style.transitionDelay = "1s";

                if(i == 1 || i == 2)
                    welcomeText.style.color ="white";
                else   
                    welcomeText.style.color = "black";
            
            }

            setInterval(() => {
                header.style.background = "url('assets/images/ecommerce-g0b53dac46_1920.jpg')";
                if(k == 17)
                    k = 0;
                changeState(k);
                ++k;
            }, 1000);

            
        </script>
    </body>
</html>