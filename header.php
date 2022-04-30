<?php 
/*if(session_status() == PHP_SESSION_NONE){

    session_start();
}*/

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8 without BOM">
    <title>Hypnos - Groupe Hotelier</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/main.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">      

        <header>
            <div class="container-fluid bg-dark px-0">
                <div class="row gx-0">
                    <div class="col-lg-3 bg-dark d-none d-lg-block">
                        <a href="index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                            <h1 class="m-0 text-primary text-uppercase">Hypnos</h1>
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <div class="row gx-0 bg-white d-none d-lg-flex">
                            <div class="col-lg-7 px-5 text-start">
                                <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                    <i class="fa fa-envelope text-primary me-2"></i>
                                    <p class="mb-0"><a href="mailto:contact-hotelier@hypnos.fr">contact-hotelier@hypnos.fr</a></p>
                                </div>
                                <div class="h-100 d-inline-flex align-items-center py-2">
                                    <i class="fa fa-phone-alt text-primary me-2"></i>
                                    <p class="mb-0">09 31 86 89 07</p>
                                </div>
                            </div>
                            <div class="col-lg-5 px-5 text-end">
                                <div class="d-inline-flex align-items-center py-2">
                                    <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="" href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                            <a href="index.php" class="navbar-brand d-block d-lg-none">
                                <h1 class="m-0 text-primary text-uppercase">HYPNOS</h1>
                            </a>
                            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav mr-auto py-0">
                                    <a href="index.php" class="nav-item nav-link active">Accueil</a>
                                    <a href="index.php#hotel" class="nav-item nav-link">Nos hotels</a>
                                    <a href="index.php#services" class="nav-item nav-link">Services</a>
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                        <div class="dropdown-menu rounded-0 m-0">
                                            <a href="booking.php" class="dropdown-item">Réservation</a>
                                            <a href="#team" class="dropdown-item">Nos equipes</a>
                                            <a href="inscription.php" class="dropdown-item">Inscription</a>
                                        </div>
                                    </div>
                                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                                </div>
                                <?php
                                    if(isset($_SESSION['email'])){
                                ?>
                                    <a href="dashboard.php" class="btn btn-primary rounded-0 py-4 px-md-5  d-lg-block">Mon Compte</a>
                                <?php
                                    }else{
                                ?>
                                    <a href="connexion.php" class="btn btn-primary rounded-0 py-4 px-md-5  d-lg-block">Connexion<i class="fa fa-arrow-right ms-3"></i></a>
                                <?php
                                }                                
                                ?>
                               
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
