    <!-- Division pour le sommaire -->
<div class="row">
      
    <nav class='col-md-2'>
        
        <h4>
            <?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
        </h4>
        <h5>
            <?php if ($_SESSION['type'] === 'C') {
                    echo "Comptable"; 
                }
                else{
                    echo "Visiteur";
                }
                ?>
        </h5>
        <h6>
            <?php
                echo $_SESSION['derniereConnexion'];
            ?>
        </h6>
        
        
        <ul class="list-unstyled">
            <?php if ($_SESSION['type'] === 'V') {
                
            ?>
           <li>
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
           <li>
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li>
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           <?php }else { ?>
            <li>
              <a href="index.php?uc=validerFicheFrais&action=validerFrais" title="Valider fiche de frais ">Valider fiche de frais</a>
           </li>
           <li>
              <a href="index.php?uc=suiviPaiement&action=suivrePaiementFrais" title="Suivre le paiement des fiches de frais">Suivre le paiement des fiches de frais</a>
           </li>
           <li>
              <a href="index.php?uc=nouveauVisiteur&action=creerUtilisateur" title="Créer un nouveau visiteur">Créer un nouveau visiteur</a>
           </li>
 	   <li>
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           <?php } ?>
         </ul>
        
        
                
        
    </nav>
    <div id="contenu" class="col-md-10">
   
        
    
    