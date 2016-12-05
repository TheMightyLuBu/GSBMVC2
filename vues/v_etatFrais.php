<h2>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h2>
    <p>
        <strong>Etat : </strong>   
            <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> 
            <strong> Montant des frais forfaitisés:</strong> <span class="label label-info">  <?php echo $montantValide?> </span>   
            </br>
            <strong> Montant des frais hors-forfaits :</strong> <span class="label label-info"><?php echo $montantHorsForfait  ?></span>
            </br>
            <strong> Montant des frais totaux :</strong> <span class="label label-info"><?php echo $montantValide + $montantHorsForfait  ?></span>
    </p>
  	<table class="table table-bordered">
  	   <caption>Eléments forfaitisés </caption>
           <thead>
              <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		?>
		</tr>
            </thead>
            <tbody>
                <tr>
        <?php
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
		</tr>
            </tbody>
    </table><br>
     <?php 
     if (!empty($lesFraisHorsForfait)) {                  
     
     ?>
  	<table class="table table-bordered">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
       </caption>
            <thead>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th> 
                
             </tr>
            </thead>
            <tbody>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];			
                        $montant = $unFraisHorsForfait['montant'];
                        $suppr = $unFraisHorsForfait['supprime'];
                        $title = $unFraisHorsForfait['motifSuppresion'];
                        if($suppr == 1)  
                        { 
                            $fond = '#FF0000';                             
                        }
                        else{
                            $fond = '#FFFFFF';     
                            $title = 'Bonjour';
                        }
		
             echo "<tr title=" . $title . " style='background-color:" . $fond . ";'>"; 
              ?>  
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
            
        <?php 
          }
		?>
            </tbody>
    </table>
     <?php 
     }
     else {
         echo "<strong>Vous n'avez pas d'élément hors forfait pour ce mois.</strong>";
     }
		?>
  </div>
 













