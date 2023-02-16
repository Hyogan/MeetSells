<?php
function returnHeader($ownerName,$style){
    if(1 == 1)
    {
        ?>
        <!DOCTYPE html>
        <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>MEETSELLS</title>
                <link rel='stylesheet' href='<?=$style?>'>
                <link rel='stylesheet' href='fontawesome-free-6.2.0-web/css/all.min.css'>
                <link rel='icon' type='image/png' sizes='40x40' href='assets/logo/meetsells-logo-zip-file/png/logo-no-background.png'>
            </head>
            <body>
                <header>
                    <nav>
                        <ul>
                        <li><a href='home.php'>HOME</a></li>
                        <li><a href='#'>PRODUCT</a></li>
                        <li><a href='#'>CONTACT</a></li>
                        <li><a href='profile-messages.php?idOwner=<?= $_SESSION['id']?>'>ABOUT <?php echo $ownerName?></a></li>
                        </ul>
                    </nav>
                </header>
                `;
        
        
        
        
        
        
        
        
        
        
        <?php
    }
       
}

?>