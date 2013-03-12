<div id="contenu">
      <h2>Liste des projets </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Descriptif des projets
       </caption>
             <tr>
                <th >code projet</th>  
                <th >libellé</th>
                <th>Nom de l'employé</th>
                <th>Prénom de l'employé</th>
                <th >&nbsp;</th>              
             </tr>
          
    <?php    
	   foreach ($lesProjets as $unProjet) {
			$codeProjet = $unProjet['codeprojet'];
			$nomProjet = $unProjet['nomprojet'];
                        $nom = $unProjet['NOM'];
			$prenom = $unProjet['PRENOM'];
		?>		
            <tr> <td><?php echo $codeProjet ?></td>
                <td><?php echo $nomProjet ?></td>
                <td><?php echo $nom ?></td>
                <td><?php echo $prenom ?></td>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  