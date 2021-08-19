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
        <title>Textes - BJ Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="/bjtext/asset/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@strongdm/glyphicon@0.0.5/src/css/bootstrap-glyphicons.min.css">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#"> BJTEXT Admin </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <!-- div class="input-group">
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
                        <h1 class="mt-4">Textes existants</h1>
                        <ol class="breadcrumb mb-4">
                       
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Tableau de bord</a></li>                                                  
                            <li class="breadcrumb-item active">Textes</li>
                        </ol>
                        <div class="row">
                            <!--div class="col-xl-6 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Actualités</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div-->
                            <!--div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Actualités</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="#">Total: <--?php $nb=$cpnews->fetchColumn(); echo $nb; ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div-->
                            <div class="col-xl-12 col-md-12">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Textes</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link text-decoration-none" href="#">Total: <?php $nb=$cptext->fetchColumn(); echo $nb; ?></a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <!--div class="col-xl-6 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                        <!--div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                         Graphe 1                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-2"></i>
                                Textes
                            </div>
                            <div class="card-body">
                            
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>Titre</th>
                                            <th>Description</th>
                                            <th>Fichier</th>
                                            <th>Catégorie</th>
                                            <th>Date</th>
                                            <th>Slugs</th>
                                            <th>Modification</th>
                                            <th>Suppression</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Description</th>
                                            <th>Fichier</th>
                                            <th>Catégorie</th>
                                            <th>Date</th>
                                            <th>Slugs</th>
                                            <th>Modification</th>
                                            <th>Suppression</th>
                                        
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                          //print_r($statement);
                                          // var_dump($statement->fetch());
                                       while($texte = $statement->fetch()){
                                      echo '<tr>';
                                           echo '<td>'.$texte['texte_titre'].'</td>';
                                           echo '<td>'.$texte['texte_description'].'</td>';
                                           echo '<td><a class ="text-decoration-none" href="pdf.php?pdf='.$texte['texte_fichier_pdf'].'"><span class="glyphicon glyphicon-eye-open"></span>Lire<a/></td>';
                                            echo '<td>'.$texte['texte_categories'].'</td>';
                                            echo '<td>'.$texte['texte_date'].'</td>';
                                            echo '<td>'.$texte['texte_slug'].'</td>';
                                           
                                            echo'<td><a class="btn btn-success" href="modifier.php?id='.$texte['texte_slug'].'"><span class="glyphicon glyphicon-pencil"><span>Modifier</a></td>';                                           
                                            echo'<td><a class="btn btn-danger" href="supprimer.php?id='.$texte['texte_slug'].'&amp;'.'fichier='.$texte['texte_fichier_pdf'].'"><span class="glyphicon glyphicon-trash"><span>Supprimer</a></td>';                                           
                                  
                                     echo '</tr>';
                                        }
                                        
                                        ?>
                                                                                  
                                    </tr>
                                      
                                
                                    </tbody>
                                </table><div><td><a class="btn btn-success" href="ajoutText.php"><span class="glyphicon glyphicon-plus"><span>Ajouter</a></div>
                            </div>
                            
                        </div>
                    </div>
                </main>
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
        <script src="/bjtext/asset/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="/bjtext/asset/demo/chart-area-demo.js"></script>
        <script src="/bjtext/asset/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="/bjtext/asset/js/datatables-simple-demo.js"></script>
    </body>
</html>
