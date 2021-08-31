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
    <header>
        <div class= "header-container">
                <div class="spotify-logo">
                    <img src="./img/spotify-logo.png" alt="logo-spotify">
                </div>
            <div class="select-container">
                <select name="music" id="genre">
                    <option value="">All</option>
                    <option value="pop">Pop</option>
                    <option value="rock">Rock</option>
                    <option value="jazz">Jazz</option>
                    <option value="metal">Metal</option>
                </select>
            </div>
        </div>
    </header>    

    <?php require_once __DIR__ . "/database/database.php";?>
    
    <?php
    /*
    //filtra i generi a seconda del parametro che hai in GET
    
      $genre = $_GET['music'];

      //funzione anonima associata alla variabile esterna
      $filtered =  function($item) use ($genre) {
            return $item["genre"] === $genre;
      };
     
      if ($genre === '') {
          $result = $database;
      } else {
          $result = array_filter($database, $filtered);
      } */
        ?>


        <?php foreach ($database as $key => $value) {?>
            <div class="album-container">
                <div class="inner-album container">
                    <img src="<?php echo "{$value['poster']}" ?>" alt="singolo-album">
                    <div class="title"><h3><?php echo "{$value['title']}" ?></h3></div>
                    <span class="author"><?php echo"{$value['author']}" ?></span>
                    <span class="year"><?php echo "{$value['year']}" ?></span>
                </div>
            </div>
        <?php } ?>

        <?php
        
        
        ?>
            
</body>
</html>