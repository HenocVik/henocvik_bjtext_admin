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
        <title>AjoutTexTe - SB Admin</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="/bjtext/asset/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">BJTEXT Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!--div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div-->
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php echo $_SESSION['nom'] ; ?></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <!--li><a class="dropdown-item" href="#!">Settings</a></li-->
                        <!--li><a class="dropdown-item" href="#!">Activity Log</a></li-->
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark bg-success" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"> </div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de bord
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Textes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="Textes.php">Voir tout les textes</a>
                                    <a class="nav-link" href="ajoutText.php">Ajouter un texte</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                               Actualités
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <!--nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages"-->
                                    <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="#">Toutes les actualités</a>
                                            <a class="nav-link" href="r#">Ajouter une actualités</a>
                                            <!--a class="nav-link" href="password.html">Forgot Password</a-->
                                        </nav>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                       
                                    </div>
                                    <!--a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav-->
                            </div>
                            <!--div class="sb-sidenav-menu-heading">Addons</div-->
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="glyphicon glyphicon-log-out"></i></div>
                                Deconnexion
                            </a>
                            <span class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-at"></i></div>
                                <?php echo $_SESSION['mail'] ;?>
                            </span>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Connecté en tantt que :</div>
                        ADMIN DE BJTEXT
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Ajout de texte</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php" class=" text-decoration-none">Tableau de bord</a></li>
                            <li class="breadcrumb-item active">Ajout de texte</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Ajouter un texte
                                <form method="post" action="" enctype="multipart/form-data">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputTitre" name="titre" type="text" placeholder="titre" value="<?php echo isset($_POST['titre']) ? $_POST['titre']:'';?>" autofocus required/>
                                        <label for="inputTitre">Titre</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputMot_clé" name="motClé" value="<?php echo isset($_POST['motClé']) ? verificationChamp($_POST['motClé']):'';?>" type="text" placeholder="mot-Clé" required />
                                        <label for="inputMot_clé">Mot-Clé</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputDescription" name="descrip" value="<?php echo isset($_POST['descrip']) ? verificationChamp($_POST['descrip']):'';?>" type="text" placeholder="description" required />
                                        <label for="inputDescription">Description</label>
                                    </div>
                                    <div class="form-control inverse mb-3">                                       
                                        <label id="inputPdf">Fichier pdf</label>
                                        <input class=" form-floating " id="inputPdf" name="pdf"  type="file" placeholder required/>
                                    </div> 
                                    <div>Catégories</div>
                                   
                                    <div class=" custom-radio  " >
                                       
                                      <?php 
                                      foreach($categories as $nom){
                                        echo'<span class="col-xl-2 btn btn-default" style="border:solid silver 1px;">';
                                        echo'<input type="radio" class="custom-control-input" id="'.$nom['categories_id'].'" name="radio"  value="'.$nom['categories_libelles'].'" required>';
                                       echo' <label class="custom-control-label" for="'.$nom['categories_id'].'">'.$nom['categories_libelles'].'</label>';
                                       echo'</span>';
                                    }
                                       ?>
                                       <!--span class="col-xl-2 btn btn-default" style="border:solid silver 1px;">
                                        <input type="radio" class="custom-control-input" id="fiscalite" name="radio" value="fiscalite"required>
                                        <label class="custom-control-label" for="fiscalite">FISCALITE</label>
                                       </span>
                                       <span class="col-xl-2 btn btn-default" style="border:solid silver 1px;">
                                        <input type="radio" cl    ass="custom-control-input" id="comptabilite" name="radio" value="comptabilite" required>
                                        <label class="custom-control-label" for="comptabilite">COMPTABILITE</label>
                                       </span>
                                       <span class="col-xl-2 btn btn-default" style="border:solid silver 1px;" >
                                        <input type="radio" class="custom-control-input" id="autre" name="radio" value="autre">
                                        <label class="custom-control-label" for="autre">AUTRE</label>
                                        </span-->  
                                    </div>
                                                 <div class="row align-items-center text-center justify-content-center  mt-4 mb-0"><span class="text-danger text-bolder-bold"><?php echo $Error ; ?></span></div>
                                    <div class="row align-items-center text-center justify-content-center  mt-4 mb-0">
                                       <input class="btn btn-primary  col-xl-4" type="submit" name="submit" value="Ajout">
                                    </div>

                                    <!--div class="dropdown">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span> Catégories</button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">DROIT</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" >FISCALITE</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#" >COMPTABILITE</a></li>
                                            <li class="divider"></li>                                       
                                            <li><a href="#" >AUTRE </a></li>
                                            <li class="divider"></li>                    
                                        </ul>
                                      </div-->
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website <?php echo date('d-M-Y');?> </div>
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
        <script src="/bjtext/asset/js/scripts.js"></script>
    </body>
</html>
