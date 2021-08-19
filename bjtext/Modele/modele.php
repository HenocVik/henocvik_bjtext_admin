<?php

//Authentfication

function sauthentifier($bdd, $email){
  $req = $bdd->prepare('SELECT * FROM abw_admin WHERE admin_email = ? ');
  $req ->execute(array($email));
  return $req;
  }


//ajouter elements
function ajouttexte($bdd, $tr, $mo, $desc, $pdf,$cat){
  
  $req=$bdd->prepare('INSERT INTO abw_texte (texte_titre,texte_mot_cles,texte_description,texte_fichier_pdf,texte_categories,texte_date,texte_slug) VALUE(?,?,?,?,?,?,?)'); 
  $req->execute(array($tr,$mo,$desc,$pdf,$cat,date("Y/m/d"),Slug($tr)));
  return $req;
}/*
*/
//modifier les elements
function modifiertexte1($bdd,$tr, $mo, $desc, $cat,$id)
{
  $req = $bdd->prepare('UPDATE abw_texte SET texte_titre=?,texte_mot_cles=?,texte_description=?,texte_categories=?,texte_slug=? WHERE texte_slug=?');
  $req->execute(array($tr, $mo, $desc, $cat,Slug($tr),$id));
  return $req;
}

//modifier les elements avec le pdf
function modifiertexte($bdd,$tr, $mo, $desc, $pdf, $cat,$id)
{
  $req = $bdd->prepare('UPDATE abw_texte SET texte_titre=?,texte_mot_cles=?,texte_description=?,texte_fichier_pdf=?,texte_categories=?,texte_slug=? WHERE texte_slug=?');
  $req->execute(array($tr, $mo, $desc,$pdf, $cat,Slug($tr),$id));
  return $req;
}



//categories
function categorie($bdd){
  $req=$bdd->query('SELECT * FROM abw_categories');
  return $req;
}
//supprimer texte
   function suptexte($bdd, $id){
   $req= $bdd->prepare('DELETE FROM abw_texte WHERE texte_slug=?');  
    $req->execute(array($id));

   } 

    function supnews($bdd){
      $req= $bdd->prepare('DELETE FROM abw_news WHERE (new_titre=?)');
     $req->execute();
    }
    
    //compter les elements de news, et texte
    function cptnews($bdd){
     $req =$bdd->query('SELECT COUNT(*) FROM abw_news') ;
     return $req;
    }

       function cpttexte($bdd){
     $req =$bdd->query('SELECT COUNT(*) FROM abw_texte') ;
     return $req;
    }
     //afficher les elements
    function afficherTexte($bdd){
      $req = $bdd->query('SELECT *	FROM abw_texte');
      return $req;
    }
  

    //afficher element precis
    function afficher($bdd,$id)
    {
      $req = $bdd->prepare('SELECT * FROM abw_texte WHERE texte_slug =?');
      $req->execute(array($id));
      return $req;
    }

     //afficher element precis
    function affichersauf($bdd,$id)
    {
      $req = $bdd->prepare('SELECT * FROM abw_texte WHERE texte_slug !=?');
      $req->execute(array($id));
      return $req;
    }

    function verifier($bdd, $title,$id){
      $req = $bdd->prepare('SELECT * FROM abw_texte WHERE texte_titre = ? AND texte_slug !=?');
      $req ->execute(array($title,$id));
      return $req;
      }
   
     function Averifier($bdd, $title){
      $req = $bdd->prepare('SELECT * FROM abw_texte WHERE texte_titre=?');
      $req ->execute(array($title));
      return $req;
      }
   
?> 					