<?php
session_start();
if(!isset($_SESSION['mdp'])){
	header('Location:login.php');

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Suppresion de Texte</title>
        <link href="/bjtext/asset/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center align-item-center">
                            <div class="col-lg-4">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Supprimer</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Voulez vous vraiment supprimer ce Texte ?</div>
                                          <form method="post" action="supprimer.php">                                 
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                 <input type="hidden" name="id" value="<?php $id=$_GET['id']; echo $id;?>"/>
                                                  <input type="hidden" name="fichier" value="<?php $fichier=$_GET['fichier']; echo $fichier;?>"/>
                                                <input type= "submit" class="btn btn-success" name="sup"  value="OUI" >
                                                <a class="btn btn-danger" href="index.php">ANNULER</a>
                                            </div>
                                          </form>
                                         </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
