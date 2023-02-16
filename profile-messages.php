

<?php
    session_start();
    require 'functions.php';
        $bdd = launch_pdo();
        $recupUser = $bdd->prepare("SELECT * FROM Users where UserId = ?");
        $recupUser->execute(array($_SESSION["id"]));
       
        if(!empty($_GET["idOwner"]) AND !empty($_GET["idOwner"])){
            $productOwner = $_GET["idOwner"];
        }
        else{
            $productOwner = $_SESSION["id"];
        }
        if($recupUser->rowCount()>0){
            
        }

        if(isset($_POST["sendMessage"])){
            if(!empty($_POST["message-to-send"])){
                $sql = "INSERT INTO Messages(id_destinateur,id_recepteur,contenu_msg) VALUES(?,?,?)";
                $dest = $_SESSION["id"];
                $recep = $productOwner;
                $content = $_POST["message-to-send"];
                $insertMessage = $bdd->prepare($sql);
                $insertMessage->execute(array($dest,$recep,$content));

            }
        }
        $recupContacts = $bdd->prepare("SELECT DISTINCT * from contacts WHERE id_owner = ? OR id_contact=?");
        $recupContacts->execute(array($_SESSION["id"],$_SESSION['id']));

       
?>


<?php
    require "header.php" ;
    returnHeader($_SESSION['userName'],'style/profile-style.css');

?>

        <main class="main-content">
            <section class="profile-menu">
                <h1 class="about-user"> </i> About me</h1>
                <div class="user-pic-name">
                    <img src="images/Anime-Bleach-47495.jpg" alt="">
                    <h3 class="username">@<?=$recupUser->fetch()['pseudo']?> <i class="fa-solid fa-user"></i></h3>
                </div>
                <ul class="user-links">
                    <li><a href="" class="menu-item messages active"><i class="fa-regular fa-message"></i>Messages</a></li>
                    <li><a href="profile-product.php?ActualId=<?=$_SESSION["id"]?>" class="menu-item add-new-product"> <i class="fa-solid fa-cart-plus"></i> Add a product</a></li>
                    <li><a href="profile-changes.php?ActualId=<?= $recupUser->fetch()['userId']?>" class="menu-item change-profile"><i class="fa-solid fa-user"></i>Change profile</a></li>
                    <li><a href="deconnexion.php" class="exit-account" ><i class="fa-solid fa-arrow-right-from-bracket"></i></i> Log Out</a></li>
                </li>
            </section>
            <section class="messages-block">
                <div class="discution">
                    <h4 class="correspondant-name"><?= $productOwner; ?></h4>
                    <div class="discutions" id="discutions-block">
                        <?php
                        require 'loadMessage.php';
                        loadMyMessages($productOwner);
                        ?>
                    </div>                    
                    <form action="" class="send-message" method="post">
                        <textarea name="message-to-send" id="" placeholder="Message" cols="30" rows="10"></textarea>
                        <button type="submit" class="fa-solid fa-paper-plane" name="sendMessage"></button>
                        
                    </form>
                </div>
            </section>

            <section class="contacts-block">
                <h3 class="block-title">My contacts</h3>
                <?php
                    if($recupContacts->rowCount() > 0){
                        while($reqcon = $recupContacts->fetch()){
                            if($reqcon["id_owner"] == $_SESSION['id']){
                                $recupContactsInfo = $bdd->prepare("SELECT * from Users WHERE userID = ?");
                                $recupContactsInfo->execute(array($reqcon["id_contacts"]));

                ?> 
                                <a href="profile-messages.php?idOwner=<?= $reqcon['id_contacts']?>">
                                    <h4 class="contact"> <img src="images/Anime-Bleach-47495.jpg" alt=""> 
                                        @<?=$recupContactsInfo->fetch()['pseudo']?>
                                    </h4>
                                </a>
                <?php
                            }
                            else{
                                $recupContactsInfo = $bdd->prepare("SELECT * from Users WHERE userID = ?");
                                $recupContactsInfo->execute(array($reqcon["id_contact"]));
                                ?>
                                 <a href="profile-messages.php?idOwner=<?= $reqcon['id_contact']?>">
                                    <h4 class="contact"> <img src="images/Anime-Bleach-47495.jpg" alt=""> 
                                        @<?=$recupContactsInfo->fetch()['pseudo']?>
                                    </h4>
                                </a>
                            <?php
                            
                            }
                
                        }
                    }
                    else{
                        echo 'no contact for the moment ';
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

        <script src="jquery.min.js"></script>
        <!-- <script>
            setInterval('loadMessages()',500);
            function loadMessages(){
                $("#discutions-block").load("loadMessage.php");
            }
        </script> -->
    </body>
</html>