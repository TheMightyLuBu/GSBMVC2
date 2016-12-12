<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
                $mdp = md5($mdp);
		$utilisateur = $pdo->getInfosUtilisateur($login,$mdp);
		if(!is_array( $utilisateur)){
			ajouterErreur("Login ou mot de passe incorrect","connexion");
			include("vues/v_connexion.php");
		}
		else{
			$id = $utilisateur['id'];
			$nom =  $utilisateur['nom'];
			$prenom = $utilisateur['prenom'];
                        $type = $utilisateur['type'];
                        $derniereConnexion = $utilisateur['derniereConnexion'];
			connecter($id,$nom,$prenom,$type,$derniereConnexion);
                        $derniereConnexion = date('Y-m-d h:i:s');
                        $pdo->majDateDerniereConnexion($derniereConnexion, $login);
                        
			include("vues/v_sommaire.php");
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>