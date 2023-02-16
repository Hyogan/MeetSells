<?php
session_start();
require 'functions.php';
$bdd = launch_pdo();
if(isset($_GET["pid"]) AND !empty($_GET["pid"])){
    $id = $_GET["pid"];
    $recupProdInfos = $bdd->prepare("SELECT * FROM Products WHERE Products.pId = ?");
    $recupProdInfos->execute(array($id));
    if($recupProdInfos->rowCount() > 0){
        $recupProdInfosBool = "true";   
    }
    $recupProductPics = $bdd->prepare("SELECT * FROM ProductImages WHERE imgOwner = ?");
    $recupProductPics->execute(array($id));
    $recupPOwner = $bdd->prepare("SELECT * FROM Users,Products WHERE Users.userID = Products.ownerId AND Products.pId = ?");
    $recupPOwner->execute(array($id));
}
?>



<?php
      require_once "header.php" ;
      returnHeader($_SESSION["userName"],"style/style-about-product.css");

?>
        <section class="nav-location"></section>
        <main role="main" aria-valuetext="Main content">
        
        <?php 
            if($recupProdInfosBool == "true"){
                while($req = $recupProdInfos->fetch()){
                ?>
                    <h1 class="product-name"><?=$req["pName"]?></h1> 
                    <section class="main-content"> 
                    <div class="product-pic-slider wrapper">
                        <button class="change-pic prev"><i class="fa-solid fa-arrow-left"></i></button>
                        
                        <div class="images-container">
                            <?php
                            while($req2 = $recupProductPics->fetch()){
                                    ?><img src="<?=$req2["img_scr"]?>" alt=""><?php
                            }
                            
                            ?>    
                            
                        </div>  
                        
                        <button class="change-pic next"><i class="fa-solid fa-arrow-right"></i></button>
                        <div class="nav-btns">
                            <button class="nav-btn active"></button>
                            <button class="nav-btn"></button>
                            <button class="nav-btn"></button>
                            <button class="nav-btn"></button>
                            <button class="nav-btn"></button>
                            <button class="nav-btn"></button>
                        </div>
                    </div>
                    <div class="container product-infos">
                        <h3>About the product</h3>
                        <p class="product-desc"><?= $req["pDescription"]?></p>
                        <div class="specifications">
                            <p class="spec">Product state <span><?= $req["pState"]?></span></p>
                            <p class="spec">Dispognibility <span><?= $req["pStock"]?> in Stock</span></p>
                            <p class="spec"> delivery time<span><?= $req["pDeliveryTime"]?> days max</span></p>
                        </div>
                        <div class="price-container">
                            <p>Unit Price :</p>
                            <p class="price">
                                <span class="amount" id="unit-price"><?= $req["pPrice"]?></span>
                                <span class="currency"> FCFA</span>
                            </p>
                        </div>
                        <div class="ordering">
                            <p class="phone-contact"> <span class=" fa-solid fa-phone"></span>Order by phone :<?= $recupPOwner->fetch()["phoneNumber"]?></p>
                            <a class="msg-owner" href="profile-messages.php?idOwner=<?=$req["ownerId"]?>"><span class="fa-solid fa-message"></span> Message owner</a>
                        </div>
                    </div>
            </section>
                <?php
            }
        }
        
        
        
        ?>
        
    
        </main>
        <script src="app.js"></script>  
    </body>
</html>