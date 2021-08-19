<?php 
  // Le chemin du fichier (path) 
  $pdf = $_GET['pdf']; 
    
  // Type de contenu d'en-tête
  header("Content-type: application/pdf"); 
    
  header("Content-Length: " . filesize($pdf)); 
    
  // Envoyez le fichier au navigateur.
  readfile($pdf); 
?>