<?php
include('../../Vue/admin/supprimer.php');
require ('../../config.php');
include('../../Modele/modele.php');


if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $cpt=0;
    $lines = afficher($bdd,$id);
    while($idvrai=$lines->fetch())
    {
        if($idvrai['texte_slug']==$id)
      {$cpt+=1;}
    }
    
    //var_dump($id);
    
    $fichier=$_POST['fichier'];
    if($cpt==1){
    
   
    if(file_exists( $fichier))
    {
   suptexte($bdd, $id);
   unlink($fichier);
    header('Location:index.php');}
    else{
        suptexte($bdd, $id);
        header('Location:index.php');
    }}else
    {
   header('Location:404.html');
   // header("HTTP/1.0 404 Not Found");
    //var_dump($fichier) ;
}}
?>