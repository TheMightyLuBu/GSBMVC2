      <h2>Création d'un nouveau visiteur</h2>
         
      <form class="form-vertical" method="POST"  action="index.php?uc=nouveauVisiteur&action=creerNouveauVisiteur">
      <div class="corpsForm">
          
          <fieldset>
            <legend>Entrer les informations du nouveau visiteur
            </legend>
              <p>
                <label>Nom : </label>
                <input type='text' name='nomVisiteur' id='nomVisiteur'>
              </p>
              <p>
                <label>Prénom : </label>
                <input type='text' name='prenomVisiteur' id='prenomVisiteur'>
              </p>
              <p>
                <label>Adresse : </label>
                <input type='text' name='adresseVisiteur' id='adresseVisiteur'>
              </p>
              <p>
                <label>Code Postal : </label>
                <input type='text' name='cpVisiteur' id='cpVisiteur'>
              </p>
              <p>
                <label>Ville : </label>
                <input type='text' name='villeVisiteur' id='villeVisiteur'>
              </p>
              <p>
                <label>Date d'embauche : </label>
                <input type='date' name='dateEmbaucheVisiteur' id='dateEmbaucheVisiteur'>
              </p>

          </fieldset>
<?php 
    if (isset($_REQUEST['erreurs'])&& $_REQUEST['erreurForm']=="NouveauVisiteur") 
    {    
        foreach($_REQUEST['erreurs'] as $erreur)
            {
             echo '<h3 class="text-danger">'.$erreur.'</h3>';
            }
     }
?>
      </div>
      <div class="piedForm">
      <p>                  
        <button type="submit" class="btn btn-primary">Valider</button>
        <button type="reset" class="btn btn-primary">Annuler</button>
      </p> 
      </div>
        
      </form>
     

  