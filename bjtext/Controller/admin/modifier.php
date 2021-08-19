<?php
    require('../../config.php');
    include('../../Modele/modele.php');
     Include('../../service.php');
    $Error ="";
    $nbtitre=0; 
    $slug = $_GET['id'];
       $data=afficher($bdd,$slug);
    while($valeur=$data->fetch())
    {
           $tr = $valeur['texte_titre'];
           $mo = $valeur['texte_mot_cles'];
           $fichier =$valeur['texte_fichier_pdf'];
           $desc = $valeur['texte_description'];
           $caorie =$valeur['texte_categories'];
           

    }    
    $categories=categorie($bdd);
     if(isset($_POST['submit']))
     {
     
      $tr = verificationChamp($_POST['titre']);
      $selection = verifier($bdd,$tr,$slug);
      while($texte= $selection->fetch())
     
      {
        if($texte['texte_titre']==$tr)
         {           
           $nbtitre+=1;
         }
      }
     
     
       $mo= verificationChamp($_POST['motClé']);
      $desc = verificationChamp($_POST['descrip']);
      $caorie= $caorie = $_POST['radio'];
      $pdf = verificationChamp($_FILES['pdf']['name']);
        $pdf_chemin = '../../asset/doc/'.basename($pdf);
        $pdf_Ext = strtolower(pathinfo($pdf_chemin,PATHINFO_EXTENSION));      
      $pdf_rename=Slug(Deletepdf_ext($pdf));
      $pdf_chemin = '../../asset/doc/'.basename($pdf_rename).'.pdf';
    

    if(empty($tr))
     {
       $Error='Titre non rempli';       
     }
     elseif($nbtitre!=0)     
         {
            $Error = 'Ce titre existe deja';  
         }
         
        /* if(isset($texte[0]) ){
          if(($texte[0]['texte_slug']==$slug)){
               
          }else{echo $Error= 'Ce titre existe deja'; }
        }else {echo $Error='Titre non rempli';}*/
        
   elseif(empty($mo))
     {
       $Error='Mot-clé non rempli';       
     }
     elseif(empty($desc)) 
       {
         $Error='Description non remplie';          
       } 
        elseif(empty($pdf)) 
        {
             //requete sql
             modifiertexte1($bdd,$tr,$mo,$desc,$caorie,$slug);
               header('Location:index.php');   
              
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
          modifiertexte($bdd,$tr, $mo, $desc,($pdf_chemin),$caorie,$slug);
          
          unlink($fichier);
         header('Location:index.php');   
         //var_dump($nbtitre);
     }
  
     
   } 

 include('../../Vue/admin/modifier.php');

?>