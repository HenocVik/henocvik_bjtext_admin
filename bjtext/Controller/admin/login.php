<?php 
session_start();
include('../../config.php');
include('../../modele/modele.php');
$Error =""; $email =$pass =$mail=$password="";

	if(isset($_POST['submit'])){
        //soumission
        $email = htmlspecialchars($_POST['mail']);
        $pass = sha1(htmlspecialchars($_POST['mdp'])); 
        $list=sauthentifier($bdd, $email);
         while($retour=$list->fetch())
         {
             $mail = $retour['admin_email'];
           $password=$retour['admin_password'];
           $nomadmin = $retour['admin_nom'];
           
         }   
               
        //Faire les autres traitement ici
        if(empty($email))
              {       
                  $Error="Vous n'avez pas entré votre email"; 
              }
              elseif(empty($pass))
              {
                  $Error="Vous n'avez pas entré votre email"; 
              }
              
                  elseif($pass==$password)
                  {
                   $_SESSION['mdp'] =$pass;
                   $_SESSION['mail'] = $mail;
                   $_SESSION['nom']  = $nomadmin;
                      header("Location:index.php"); 
                  }
                  else
                  {
                     $Error="Information incorrect";
                  }
                
           
        
    } 
    include('../../vue/admin/connexion.php');
    //var_dump($_SESSION['mdp'],$email,$_POST['mail'],$_POST['mdp'],$_POST['submit']);
    

?>