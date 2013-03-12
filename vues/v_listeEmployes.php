<div id="contenu">
      <h2>Liste des employés </h2>
      <div class="corpsForm">
     <table >
  	   <caption>Liste des employés
       </caption>
             <tr>
                <th >Nom</th>  
                <th >Prénom</th>  
                <th >&nbsp;</th>              
             </tr>
          
    <?php    
	   foreach ($lesEmployes as $unEmployes) {
			$nom = $unEmployes['NOM'];
			$prenom = $unEmployes['PRENOM'];
		?>		
            <tr> <td><?php echo $nom ?></td>
                <td><?php echo $prenom ?></td>
    <?php		 
          
          }
?>	  
                                          
    </table>
      </div>
</div>
     
  