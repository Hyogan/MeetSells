<?php
    require 'functions.php';
    if(isset($_POST["submit"])){
        if(!empty($_POST["name"]) AND !empty($_POST["surname"]) AND !empty($_POST["email"])){
            $bdd = launch_pdo();
            $sql = "INSERT INTO newsletter(firstname,lastname,email) VALUES(? ? ?)";
            $name = $_POST["name"];
            $surname = $_POST["surname"];
            $email = $_POST["email"];
            $insertNewsLetterMember = $bdd->prepare($sql);
            $insertNewsLetterMember->execute(array($name,$surname,$email));
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta author = "Nelson Tiagho">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
        <link rel="icon" type="image/png" sizes="40x40" href="assets/logo/meetsells-logo-zip-file/png/logo-no-background.png">
      
        <title>MeetSells</title>
    </head>
    <body>
        <header class="intro-block">
            <nav class="absolute-nav">
                <h1 class="web-title">
                    <!-- <img src="assets/logo/logo-no-background.png" alt=""> -->
                    <img src="assets/logo/meetsells-logo-zip-file/png/logo-no-background.png" alt="">
                    <p class="website-slog">Meet here, Sell there</p>
                </h1>
                <div class="buttons">
                    
                    <button class="change-pic prev"><i class="fa-solid fa-arrow-left"></i></button>
                    <a href="sign-up.php"><button>Sign Up</button></a>
                    <a href="sign-up.php"><button> Log in</button></a>
                    <a href="#desc-blocks"><button> Explore</button></a>
                    <button class="change-pic next"><i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </nav>
            <h1 class="Website-title"><b id="welcome">Welcome on </b> <br><span>MeetSells</span></h1>
            <p class="website-desc">
                Meet sellers and buyers from all around the world and about all categories of products
                at best prices.
                
            </p>
            <div class="sign-up-login">
               <button><a href="sign-up.php">Sign Up</a></button> 
                <button><a href="sign-up.php">Login</a></button>
            </div>
        </header>
        <main class="website-desc-blocks" id="desc-blocks" role="main">
            <div class="item-block slide" id="b1">  
                <div class="item-abouts">
                    <h1 class="item-block-title" id="bt1">TECHNOLOGY</h1>
                    <p class="item-desc">   
                        Discover the best of the new technologies at the best prices with long terms of guaranty !!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates natus quidem
                            unde accusantium aspernatur.
                            <button><i class="fa-solid fa-cart-shopping"></i>Shop Here</button>
                    </p>
                </div>
            
                <div class="item-pics">
                    <img src="assets/images/tech/imac-g2f0067ecd_1920.png" alt="">
                    <img src="assets/images/tech/virtual-g81b12597b_1920.jpg" alt="">
                    <img src="assets/images/tech/pexels-pixabay-4158.jpg" alt="">
                    <img src="assets/images/tech/pexels-tuur-tisseghem-812264.jpg" alt="">
                </div>
            </div>
            <div class="item-block slide" id="b2">
                <div class="item-abouts">
                    <h1 class="item-block-title" id="bt2">clothes</h1>
                    <p class="item-desc">
                        Discover the best of the new technologies at the best prices with long terms of guaranty !!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates natus quidem
                        unde accusantium aspernatur.
                            <button><i class="fa-solid fa-cart-shopping"></i>Shop Here</button>
                    </p>
                </div>
                
                <div class="item-pics">
                    <img src="assets/images/clothes/pexels-ksenia-chernaya-3965545.jpg" alt="">
                    <img src="assets/images/clothes/pexels-pixabay-325876.jpg" alt="">
                    <img src="assets/images/clothes/pexels-tembela-bohle-1884581.jpg" alt="">
                    <img src="assets/images/clothes/pexels-pixabay-325876.jpg" alt="">
                </div>
            </div>

            <div class="item-block slide" id="b3">
                <div class="item-about">
                    <h1 class="item-block-title" id="bt3">accesories</h1>
                    <p class="item-desc">
                        Discover the best of the new technologies at the best prices with long terms of guaranty !!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates natus quidem
                            unde accusantium aspernatur.
                            <button><i class="fa-solid fa-cart-shopping"></i>Shop Here</button>
                    </p>
                </div>
                
                <div class="item-pics">
                    <img src="assets/images/accesories/pexels-karol-d-325153.jpg" alt="">
                    <img src="assets/images/accesories/hat-g125670e2e_1920.png" alt="">
                    <img src="assets/images/accesories/analog-watch-1869928__340.jpg" alt="">
                    <img src="assets/images/accesories/time-3091031_960_720.jpg" alt="">
                </div>
            </div>

            <div class="item-block slide" id="b4">
                <div class="item-abouts">
                    <h1 class="item-block-title" id="bt4">shoes</h1>
                    <p class="item-desc">
                        Discover the best of the new technologies at the best prices with long terms of guaranty !!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates natus quidem
                        unde accusantium aspernatur.
                        <button><i class="fa-solid fa-cart-shopping"></i>Shop Here</button>
                    </p>
                </div>
                
                <div class="item-pics">
                    <img src="assets/images/shoes/partnerlook-ga7faaa0f8_1920.jpg" alt="">
                    <img src="assets/images/shoes/pexels-web-donut-19090.jpg" alt="">
                    <img src="assets/images/shoes/pexels-melvin-buezo-2529148.jpg" alt="">
                    <img src="assets/images/shoes/pexels-lil-artsy-1159670.jpg" alt="">
                </div>
            </div>

            <div class="item-block slide" id="b5">
                <div class="item-abouts">
                    <h1 class="item-block-title" id="bt5">Fashion</h1>
                    <p class="item-desc">
                        Discover the best of the new technologies at the best prices with long terms of guaranty !!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem voluptates natus quidem
                        unde accusantium aspernatur.
                        <button><i class="fa-solid fa-cart-shopping"></i>Shop Here</button>
                    </p>
                </div>
                
                <div class="item-pics">
                    <img src="assets/images/jewelry/amethyst-g7c400209a_1920.jpg" alt="">
                    <img src="assets/images/jewelry/crown-g20b5fc33a_1920.jpg" alt="">
                    <img src="assets/images/jewelry/jewelry-gc10189c46_1920.jpg" alt="">
                    <img src="assets/images/jewelry/pearls-gfd246c6f5_1280.png" alt="">
                </div>
            </div>
        </main>


            <footer class="footer-block" ariavalue="Footer" id="sign-up">
                <form action="" method="post">
                    <h2 class="title">Suscribe to our newsletter</h2>
                    <p class="form-desc">
                        Suscribe to our newsletter and receive all news about our products and benefit of All
                        product's promotion as soon as they are available.
                        Its FREE !!
                    </p>
                    <div class="labels">
                        <label for="name">
                            Your first name : 
                            <input type="text" name="name" id="name" placeholder="Enter your first name" required>
                        </label>
                        <label for="surname">
                            Your last name : 
                            <input type="text" name="surname" id="surname" placeholder="Enter your lastname" required>
                        </label>   
                        <label for="email-block">
                            Your e-mail : 
                            <input type="email" name="email" id="" placeholder="Enter your e-mail adress" required pattern="[A-Za-z0-9._+-]+@[A-Za-z0-9. -]+\.[a-z]{2,}">
                        </label>
                    </div>
                    
                    <h5 class="validate-form">Please enter correct values</h5>
                    <p class="footer-buttons">
                        <input type="reset" value="Reset">
                        <input type="submit" value="Submit" name="submit">
                    </p>
                </form>
                <div class="about-us">
                    <p class="footer-where-we-are"> 
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                          incididunt ut labore et dolore magna aliqua
                        </span> 
                    </p>  
                    <h2 class="call-us"> <i class="fa-solid fa-phone"></i> +1-543-123-4567</h2>
                    <h2 class="email-us"><i class="fa-solid fa-envelope"></i> tiaghojeux@gmail.com</h2>
                    <p class="copyright">&copy; Copyright 2022 TiaghoNelson. All rights reserved.</p>
                </div>
        </footer>

        <script src="janpaepke-ScrollMagic-5915165/scrollmagic/minified/ScrollMagic.min.js"></script>
        <script src="janpaepke-ScrollMagic-5915165/scrollmagic/minified/plugins/debug.addIndicators.min.js"></script>
        <script>
           const header = document.querySelector("header");
           const blocks_container  = document.querySelector("main");
           const prev_btn = document.querySelector(".change-pic.prev");
           const next_btn = document.querySelector(".change-pic.next");
           const welcomeText = document.querySelector("#welcome");
           const bodyBlock = document.querySelector("body");

            
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
                header.style.background = `url(${arrayBackgrounds[i]})`;
                header.style.backgroundRepeat = "no-repeat";
                header.style.backgroundSize = "100%";
                header.style.backgroundPosition = "center";
                header.style.transition="16s";
                header.style.transitionDuration = "1s";
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
            }, 4000);

            function testscroll(){
                scrollTo(0,700);
            }

            next_btn.addEventListener("click",()=>{
                testscroll();
                if(blocks_container.scrollLeft >= 5000)
                    blocks_container.scrollLeft = 0;
                else
                    blocks_container.scrollLeft +=1362;
            })
            
            prev_btn.addEventListener("click",()=>{
                testscroll();
                if(blocks_container.scrollLeft == 0){
                    blocks_container.scrollLeft =5448;
                }
                else{
                    blocks_container.scrollLeft -=1362;
                }
            })
            
           


        </script>
    </body>
</html>