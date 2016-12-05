<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$lesVisiteurs=$pdo->getLesVisiteurs($date);//pas finie 
include ('vues/v_suiviPaiement.php');

?>