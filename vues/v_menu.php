 <!-- Division pour le menu -->
    <div id="menuGauche">
    
        <ul id="menuList">
            <li >
		 Bienvenu(e) : <?php echo $_SESSION['login']?>	
            </li>
              Les projets
           <ul>
              <li><a href="index.php?do=lesProjets&action=enDetail" title="Les projets">En détail</a></li>
              <li><a href="index.php?do=lesProjets" title="Les projets">En liste</a></li>
           </ul>
           <li >
              <a href="index.php?do=lesEmployes" title="Les employés">Les employés</a>
           </li>
             <li >
              <a href="index.php?do=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
           
         </ul>
        
    </div>
    