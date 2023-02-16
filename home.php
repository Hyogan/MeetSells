<?php
session_start();
if($_SESSION["id"]){
    require 'functions.php';
    $bdd = launch_pdo();

    if($_SESSION["owner"] == 'admin'){
        $sql = "SELECT * FROM Administrators WHERE idAdmin = ?";
        $ownerName = "";
        $recupUser = $bdd->prepare($sql);
        $recupUser->execute(array($_SESSION["id"]));
        $ownerName = $recupUser->fetch()["adminPseudo"] . " Fogue";
    } 
    else{
        $sql = "SELECT * FROM USERS WHERE userID = ?";
        $recupUser = $bdd->prepare($sql);
        $recupUser->execute(array($_SESSION["id"]));
        $ownerName = $recupUser->fetch()["firstname"];
    
    }
    $sql2 = "SELECT * FROM Products, ProductImages WHERE Products.pId = ProductImages.imgOwner AND ProductImages.imgTitle = ?";
    $recupProduct = $bdd->prepare($sql2);
    $recupProduct->execute(array(1));
    $_SESSION["userName"] = $ownerName;
}
else{
    header("location:index.php");
}
?>


<?php 
    require_once "header.php" ;
    returnHeader($ownerName,"style/style-home.css");
?>
        <h1 class="main-title">Our Products</h1>
        <main>
            <section class="categories-section">
                <img src="" alt="menu">
                <h2 class="categories-title"></h2>
                <input type="checkbox" name="categories" id="">
                <fieldset>
                    <legend>categories</legend>
                
                    <div>
                      <input type="checkbox" id="scales" name="scales" checked>
                      <label for="scales">Scales</label>
                    </div>
                    <div>
                      <input type="checkbox" id="horns" name="horns">
                      <label for="horns">Horns</label>
                    </div>
                </fieldset>
            </section>
            <section class="products-sections">
                <?php
                    if($recupProduct->rowCount() > 0){
                        while($req = $recupProduct->fetch()){
                            ?>
                            <div class="product-card">
                                <img src="<?= $req["img_scr"]?>" alt="product-pic -- <?= $req["pName"]?>">
                                <div class="about-product">
                                    <h4 class="product-name"><?= $req["pName"]?></h4>
                                    <h5 class="product-card-price"><?= $req["pPrice"]?></h5>
                                    <a href="product-info.php?pid=<?= $req["pID"] ?>">View Product</a>
                                </div>
                            </div>
                            
                            <?php
                        }
                    }
                    else{?>
                        <p class="no-product">No product for the moment sorry for the desagreement!!!</p>
                        <style>
                            .no-product{
                                font-size : 50px;
                                width: 400%;
                                margin-top : -400px;
                                color : red;
                            }
                        </style>
                    <?php
                    }
                ?>
                
               <!--  <div class="product-card">
                    <img src="assets/images/accesories/analog-watch-1869928__340.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="product-info.html">View Product</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="assets/images//tech/imac-g2f0067ecd_1920.png" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="assets/images/shoes/pexels-melvin-buezo-2529148.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="assets/images/shoes/pexels-web-donut-19090.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="assets/images/tech/pexels-tuur-tisseghem-812264.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="assets/images/tech/virtual-g81b12597b_1920.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="assets/images/jewelry/crown-g20b5fc33a_1920.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="assets/images/jewelry/amethyst-g7c400209a_1920.jpg" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div>
                
                <div class="product-card">
                    <img src="assets/images/jewelry/pearls-gfd246c6f5_1280.png" alt="product-pic">
                    <div class="about-product">
                        <h4 class="product-name">Analog Watch</h4>
                        <h5 class="product-card-price">FCFA 65000</h5>
                        <a href="#">View Product</a>
                    </div>
                </div> -->
            </section>
            <section class="socials-sections">
            <section class="pseudo"></section>
                <h4 class="socials-title">Follow Us</h4>
               <ul>
                <li><a href="" class="fa-brands fa-facebook-f"></a></li>
                <li><a href="#" class="fab fa-twitter"></a></li>
                <li><a href="#" class="fab fa-instagram"></a></li>
                <li><a href="#" class="fab fa-linkedin"></a></li>
               </ul>
            </section>
        </main>


    </body>
</html>