<?php 
    function loadMyMessages($productOwner)
    {
        $bdd = launch_pdo();
        $recupMessage= $bdd->prepare("SELECT * FROM Messages Where (id_destinateur = ? AND id_recepteur = ?) OR (id_destinateur = ? AND id_recepteur = ?)");
        $recupMessage->execute(array($_SESSION['id'],$productOwner,$productOwner,$_SESSION['id']));
        while($message = $recupMessage->fetch()) {
            if($message['id_destinateur'] == $_SESSION["id"] AND $message["id_recepteur"] == $productOwner){
            ?> 
                <h4 class="send-message"><?= $message['contenu_msg']; ?></h4>
            <?php
            } 
            else {?>
                <h4 class="received-message"><?= $message['contenu_msg']; ?></h4>
            <?php 
            }        
        }
    }
?>
                