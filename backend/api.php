<?php
//stampa il jason del tuo array

require_once __DIR__ . "/../database/database.php";
require_once __DIR__ . "/../functions/printJson.php";

printJson($database);

/*

//ti permette di dichiarare al client che contiene solo json
//non farlo mai precedere da echo altrimenti non va
header('Content-Type: application/json');
echo json_encode($database);//stampa array trasformandolo in json
*/
?>