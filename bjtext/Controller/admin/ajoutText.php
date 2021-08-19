<?php
require('../../config.php');
Include('../../Modele/modele.php');
$Error ="";
$nbtitre=0; 
$categories=categorie($bdd);
Include('../../service.php');
$titre = $mot = $descrip = $pdf =$caorie = '';



if(isset($_POST['submit'])){
 
     $titre = verificationChamp($_POST['titre']);
     $title= Averifier($bdd,$titre);
     while($existe=$title->fetch())
      {
        if($existe['texte_titre']==$titre)
         {           
           $nbtitre+=1;
         }
      }
      $mot = verificationChamp($_POST['motClé']);
      $descrip = verificationChamp($_POST['descrip']);
      $caorie = $_POST['radio'];
      $pdf = verificationChamp($_FILES['pdf']['name']);
        $pdf_chemin = '../../asset/doc/'.basename($pdf);
        $pdf_Ext = strtolower(pathinfo($pdf_chemin,PATHINFO_EXTENSION));      
      $pdf_rename=Slug(Deletepdf_ext($pdf));
      $pdf_chemin = '../../asset/doc/'.basename($pdf_rename).'.pdf';
          
            if(empty($titre))
            {
              $Error='Titre non rempli';       
            }
           elseif($nbtitre!=0)
            {
                 $Error='Ce titre existe deja';  
                
            }
            elseif(empty($mot))
            {
              $Error='Mot-clé non rempli';       
            }
            elseif(empty($descrip)) 
              {
                $Error='Description non remplie';          
              }    
              elseif(empty($pdf))
              {
                 $Error='Aucun fichier trouvé';
              }
            elseif($pdf_Ext !='pdf')
            {
              $Error='Type de fichier invalide de preference un fichier pdf ';
            }
            elseif(file_exists($pdf_chemin))
              {
                $Error='Le fichier existe dejà';                        
              }
             elseif($_FILES['pdf']['size'] > 6000000){
               $Error='Taille du fichier invalide';
             }
            else
            {
                  $po=move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf_chemin);  
                  //requete sql
                 ajouttexte($bdd,$titre, $mot, $descrip,($pdf_chemin),$caorie,);
                  header('Location:index.php');   
            }
        
     }
     Include('../../Vue/admin/ajouTexte.php');
    
     //print_r($Error);
   /*  if ($Ext=='pdf'){
       echo $path.' Categories ';
       if(move_uploaded_file($_FILES['pdf']['tmp_name'],$path))
       {
        // ajouttexte($bdd);
         header('Location:index.php');
        // echo ' bravo';}
     }else {$Error = 'Fichier invalide';}

}



if(isset($_POST['titre']) and isset($_POST['motClé'])and isset($_POST['descrip'])and isset($_POST['pdf'])and isset($_POST['categorie'])){
 $titre=$_POST['titre'];
         =$_POST[''];
          
                
          $categorie=$_POST['categorie'];



*/
?>

