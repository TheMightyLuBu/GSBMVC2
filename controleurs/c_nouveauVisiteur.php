<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
switch($action){
	case 'creerNouveauVisiteur':{
                $nom = $_REQUEST['nomVisiteur'];
                $prenom = $_REQUEST['prenomVisiteur'];
                $adresse = $_REQUEST['adresseVisiteur'];
                $cp = $_REQUEST['cpVisiteur'];
                $ville = $_REQUEST['villeVisiteur'];
                $dateEmbauche = $_REQUEST['dateEmbaucheVisiteur'];
		if(!empty($nom) && !empty($prenom) && !empty($adresse) && !empty($cp) && !empty($ville) && !empty($dateEmbauche)){
                    $id = generationId(3);
                    $mdp = generationMdp(5);
                    $mdpAvantMD5 = $mdp;
                    $mdp = md5($mdp);
                    $login = generationLogin($nom, $prenom);
                    $login = $pdo->verifLoginVisiteur($login);
                    $pdo->creerNouveauVisiteur($id, $nom, $prenom, $login, $adresse, $cp, $ville, $dateEmbauche, $mdp);
                    echo "<h3 class='text-info'>L'utilisateur a bien été créé !</h3>";
                    echo "<h3>Login : ".$login."</h3>";
                    echo "<h3>Mot de passe : ".$mdpAvantMD5."</h3>";
		}
		else{
			ajouterErreur("Tous les champs doivent être renseignés pour continuer","NouveauVisiteur");
			/*include("vues/v_erreurs.php");*/
		}
	  break;
	}
}
include("vues/v_creationVisiteur.php");

?>