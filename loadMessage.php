<?php 
    session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8','nelson','password');
    $recupMessage= $bdd->prepare("SELECT * FROM Messages Where (id_destinateur = '?' AND id_recepteur = '?') OR (id_destinateur = '?' AND id_recepteur = '?')");
    $recupMessage->execute(array($_SESSION['id']),$poductOwner,$poductOwner,$_SESSION['id']);
    while($message = $recupMessage->fetch()) {
        if($message['id_destinateur'] == $_SESSION["id"] AND $message["id_recepteur"] == $poductOwner){
        ?> 
            <h4 class="send-message"><?= $message['contenu_msg']; ?></h4>
        <?php
        } 
        else {?>
            <h4 class="received-message"><?= $message['contenu_msg']; ?></h4>
        
        <?php 
        }        
    }
?>
                