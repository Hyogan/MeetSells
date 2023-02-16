<?php
    session_start();
        require 'functions.php';
        $bdd = launch_pdo();
        $recupUser = $bdd->prepare("SELECT * FROM Users where UserId = ?");
        $recupUser->execute(array($_SESSION["id"]));
    $msgdark = "";
        
        $recupProd = $bdd->prepare("SELECT * from Users,Products,ProductImages WHERE  Users.userId = Products.ownerId AND ProductImages.imgOwner = Products.pId AND Users.UserId= ? AND ProductImages.ImageID = ?");
        $recupProd->execute(array($_SESSION["id"],1));


        if(isset($_POST['submit'])){
            if(!empty($_POST["product-name"]) AND !empty($_POST["product-price"]) AND !empty($_POST["product-desc"]) AND !empty($_POST["product-stock"]) AND !empty($_POST["product-state"]) AND !empty($_POST["delivery-time"])  AND !empty($_POST['product-reduction'])){
                $name = $_POST["product-name"];
                $price = $_POST["product-price"];
                $desc = $_POST["product-desc"];
                $stock = $_POST["product-stock"];
                $state = $_POST["product-state"];
                $deliver = $_POST['delivery-time'];
                $reduc = $_POST['product-reduction'];
                $id = $_SESSION["id"];

                $sql = "INSERT INTO Products(pName,pDescription,pState,pStock,pDeliveryTime,pPrice,pPromo,ownerId) VALUES(?,?,?,?,?,?,?,?)";
                $insertProduct = $bdd->prepare($sql);
                $insertProduct->execute(array($name,$desc,$state,$stock,$deliver,$price,$reduc,$id));
                
                $sql1 = "SELECT * FROM Products where pName =? AND pDescription =? AND pState =? AND pStock =? AND pDeliveryTime =? AND pPrice =? AND pPromo =? AND ownerId = ?";
                $recuP = $bdd->prepare($sql1);
                $recuP->execute(array($name,$desc,$state,$stock,$deliver,$price,$reduc,$id));
                
                
                while($re = $recuP->fetch()){
                    uploadPic("product-pic1",1,$re["pID"]);    
                    uploadPic("product-pic2",2,$re["pID"]);    
                    uploadPic("product-pic3",3,$re["pID"]);    
                    uploadPic("product-pic4",4,$re["pID"]);    
                    uploadPic("product-pic5",5,$re["pID"]);    
                    uploadPic("product-pic6",6,$re["pID"]);    
                }
               
            }
        }

    function uploadPic($picName,$index,$owner){
        if(isset($_FILES[$picName])){
            $target_dir =  "ProductsImages/";
            $image_path = $target_dir . basename($_FILES[$picName]['name']);
            if(!empty($_FILES[$picName]['tmp_name'])){
                if(file_exists($image_path)){
                    $msgdark = 'Image already exists, please choose another or rename that image.';
                }else if($_FILES[$picName]['size'] > 5000000){
                    $msgdark = 'Image file size too large, please choose an image less than 500kb.';

                }
                    
                else{
                    if(move_uploaded_file($_FILES[$picName]['tmp_name'],$image_path)){
                        echo 'good';
                    }
                    else{
                        echo "wrong";
                    }
                
                    $bdd1 = launch_pdo();
                    $sql2 = "INSERT INTO ProductImages(imgTitle,img_scr,imgOwner) VALUES(?,?,?)";
                    $insertPic = $bdd1->prepare($sql2);
                    $insertPic->execute(array($index,$image_path,$owner));
                }
                
            }
        }  
    }
       
?>






<?php
    require_once "header.php" ;
    returnHeader($_SESSION['userName'],"style/profile-style.css");

?>

        <main class="main-content">
            <section class="profile-menu">
                <h1 class="about-user"> </i> About me</h1>
                <div class="user-pic-name">
                    <img src="images/Anime-Bleach-47495.jpg" alt="">
                    <h3 class="username">@<?=$recupUser->fetch()['pseudo']?> <i class="fa-solid fa-user"></i></h3>
                </div>
                <ul class="user-links">
                    <li><a href="profile-messages.php?idOwner=<?= $recupUser->fetch()['userId']?>" class="menu-item messages"><i class="fa-regular fa-message"></i>Messages</a></li>
                    <li><a href="profile-product.php?idOwner=<?= $recupUser->fetch()['userId']?>" class="menu-item add-new-product active"> <i class="fa-solid fa-cart-plus"></i> Add a product</a></li>
                    <li><a href="profile-changes.php?idOwner<?= $recupUser->fetch()['userId']?>" class="menu-item change-profile"><i class="fa-solid fa-user"></i>Change profile</a></li>
                    <li><a href="deconnexion.php" class="exit-account" ><i class="fa-solid fa-arrow-right-from-bracket"></i></i> Log Out</a></li>
                </li>
            </section>
            <section class="add-product">
                <h2 class="add-title">Adding a new Product</h2>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="product-name">  Product name : <input type="text" name="product-name" id="" required></label>
                    <label for="product-price"> Product price : <input type="number" name="product-price" id="" required placeholder="in FCFA"></label>
                    <label for="product-desc">  Product description : <textarea name="product-desc" id="" cols="50" rows="7" required placeholder="product decription, including some specifications or particular details"></textarea></label>
                    <label for="product-stock"> Product stock : <input type="number" name="product-stock" id="" required></label>
                    <label for="product-state"> Product state : <input type="text" name="product-state"placeholder="new, second hand or else" required></label>
                    <label for="delivery-time"> delivery time : <input type="number" name="delivery-time"placeholder="in days" required></label>
                    <label for="product-reduction"> Reduction promo : <input type="number" name="product-reduction" name="placeholder="in percentage" required></label>
                    <div class="product-pics">
                        <label class="product-pic" for="product-pic1">product picture 1 : <input type="file" accept="image/png, image/jpeg"  name="product-pic1" required></label>
                        <label class="product-pic" for="product-pic2">product picture 2 : <input type="file" accept="image/png, image/jpeg"  name="product-pic2" required></label>
                        <label class="product-pic" for="product-pic3">product picture 3 : <input type="file" accept="image/png, image/jpeg"  name="product-pic3" required></label>
                        <label class="product-pic" for="product-pic4">product picture 4 : <input type="file" accept="image/png, image/jpeg"  name="product-pic4" required></label>
                        <label class="product-pic" for="product-pic5">product picture 5 : <input type="file" accept="image/png, image/jpeg"  name="product-pic5" required></label>
                        <label class="product-pic" for="product-pic6">product picture 6 : <input type="file" accept="image/png, image/jpeg"  name="product-pic6" required></label>
                    </div>
                    <p class="error">
                        <?= $msgdark;?>
                    </p>
                    <style>
                        .error{
                            color : red;
                            font-size : 20px;
                            font-weight : 700;
                        }
                    </style>
                    <label for="buttons"> 
                        <input type="submit" value="submit" name="submit">
                        <input type="reset" value="Reset">
                    </label>
                </form>
            </section>
            <section class="added-product">
                <h3 class="block-title">My Products</h3>
                <?php
                    while($req = $recupProd->fetch()){
                        ?>
                            <h4 class="contact"> <img src="<?= $req["pName"]; ?>" alt=""><?= $req["pName"]; ?></h4>
                
                        <?php
                    }
                ?>
                
            </section>
        </main>

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