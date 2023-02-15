



<?php
session_start();
    require "header.php";
   returnHeader($_SESSION["userName"],"style/profile-style.css");

   $bdd = new PDO("mysql:host=localhost;charset=UTF8;dbname=MEETSELLS","root","");
   $recupUser = $bdd->prepare("SELECT * FROM Users where UserId = ?");
   $recupUser->execute(array($_SESSION["id"]));
   $productOwner = 10;//= $_GET["idOwner"];

?>
        <main class="main-content">
            <section class="profile-menu">
                <h1 class="about-user"> </i> About me</h1>
                <div class="user-pic-name">
                    <img src="images/Anime-Bleach-47495.jpg" alt="">
                    <h3 class="username">@NelsonArsene <i class="fa-solid fa-user"></i></h3>
                </div>
                <ul class="user-links">
                    <li><a href="" class="menu-item messages"><i class="fa-regular fa-message"></i>Messages</a></li>
                    <li><a href="profile-product.php?idOwner=<?= $recupUser->fetch()['userId']?>" class="menu-item add-new-product active"> <i class="fa-solid fa-cart-plus"></i> Add a product</a></li>
                    <li><a href="profile-changes.php?idOwner<?= $recupUser->fetch()['userId']?>" class="menu-item change-profile"><i class="fa-solid fa-user"></i>Change profile</a></li>
                    <li><a href="deconnexion.php" class="exit-account" ><i class="fa-solid fa-arrow-right-from-bracket"></i></i> Log Out</a></li>
                </li>
            </section>
            <section class="messages-block">
                <div class="discution">
                    <h4 class="correspondant-name">correspondant-name</h4>
                    <h4 class="received-message">Good morning sir</h4>
                    <h4 class="send-message">Good morning! What can we do for you??</h4>
                    <h4 class="received-message">I'm interested by one of your product !!</h4>
                    <h4 class="received-message">The smartwatch V99</h4>
                    <h4 class="send-message">Witch size and how many??</h4>
                    
                    <form action="" class="send-message">
                        <textarea name="message-to-send" id="" placeholder="Message" cols="30" rows="10"></textarea>
                        <button type="submit" class="fa-solid fa-paper-plane"></button>
                        
                    </form>
                </div>
            </section>

            <section class="contacts-block">
                <h3 class="block-title">My contacts</h3>
                <h4 class="contact"> <img src="images/Anime-Bleach-47495.jpg" alt=""> @Billy</h4>
                <h4 class="contact"> <img src="images/Anime-Naruto-47666.jpg" alt=""> @josh2024</h4>
                <h4 class="contact"> <img src="images/Anime-Naruto-47666.jpg" alt=""> @joshua46</h4>
                <h4 class="contact"> <img src="images/Anime-Naruto-47666.jpg" alt="">@john784</h4>
            </section>
        </main>
        <section class="change-profile"></section>
        <!-- <section class="add-product">
            <form action="">
                <label for="product-name">  Product name : <input type="text" name="product-name" id="" required></label>
                <label for="product-price"> Product price : <input type="number" name="product-price" id=""></label>
                <label for="product-desc">  Product description : <textarea name="product-desc" id="" cols="30" rows="10"></textarea></label>
                <label for="product-stock"> Product stock : <input type="number" name="product-stock" id=""></label>
                <label for="product-state"> Product state : <input type="text" placeholder="new, second hand or else"></label>
                <label for="delivery-time"> delivery time : <input type="number" placeholder="in days"></label>
                <label for="product-pic">
                    product pic 1 :<input type="image" src="" alt="">
                    <input type="file">
                    product pic 2 :<input type="image" src="" alt="">
                    product pic 3 :<input type="image" src="" alt="">
                    product pic 4 :<input type="image" src="" alt="">
                    product pic 5 :<input type="image" src="" alt="">
                    product pic 6 :<input type="image" src="" alt="">
                </label>
                <label for="buttons"> 
                    <input type="submit" value="submit">
                    <input type="reset" value="Reset">
                </label>
            </form>
        </section> -->

        <footer>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
            </ul>
            
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
            </ul>
            
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
            </ul>
            
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">HOME</a></li>
            </ul>
        </footer>

       
    </body>
</html>