<?php
//connexion base de données
     require ('../../config.php');
    
     //Modele
     require('../../Modele/modele.php');  
    // decompte  
    $cptext=cpttexte($bdd); $cpnews=cptnews($bdd);
    //affichage des Textes
    $statement=afficherTexte($bdd);
    Include ('../../Vue/admin/index.php');
   


?>