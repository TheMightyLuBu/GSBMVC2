<?php
include("vues/v_sommaire.php");
$action = $_SESSION['action'];
$idVisiteur=$_SESSION['idVisiteur'];
$mois=$_SESSION['mois'];
switch($action){
        case 'selectionnerFicheFrais':{
            $lesFraisForfait = $pdo->getLesFraisForfait($idVisiteur,$mois);
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
            break;
        }
        case 'modifierFicheFrais':{
           
            break;
        }
        case 'supprimerFicheFrais':{
           
            break;
        }
        case 'validerFicheFrais':{
          
            break;
        }
    
};

