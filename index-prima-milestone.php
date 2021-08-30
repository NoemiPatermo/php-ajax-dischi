<?php 

/*
Esercizio di oggi:
cartella/repo php-ajax-dischi
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html, Sass, JS, VueJS, PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. => index-prima-milestone.php
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi-prima-milestone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php require_once __DIR__ . "/database/database.php";?>

    
        <?php foreach ($database as $key => $value) {?>
            <div class="album-container">
                <div class="inner-album container">
                    <img src="<?php echo "{$value['poster']}" ?>" alt="singolo-album">
                    <div class="title"><h4><?php echo "{$value['title']}" ?></h4></div>
                    <div class="author"><?php echo"{$value['author']}" ?></div>
                    <div class="year"><?php echo "{$value['year']}" ?></div>
                </div>
            </div>
        <?php } ?>
    
</body>
</html>