<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri()."/assets/img/favoricon.jpg"?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
</head>
<body class="bg-secondary">
    <div class="container bg-white">
    <!-- first nav -->
    <nav class="navbar first-navbar container navbar-light margin-bottom-10">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">contact.estsb@ucd.ma</a>
        <a class="text-white" href="http://www.ucd.ac.ma/">Portail de l'université</a>
        <div>
            <ul class="list-unstyled">
                <li class="d-inline"><i class="fa fa-facebook"></i></li>
                <li class="d-inline"><i class="fa fa-twitter"></i></li>
                <li class="d-inline"><i class="fa fa-youtube"></i></li>
            </ul>
        </div>
    </div>
    </nav>
    <!--end first nav -->
    <!-- logo -->
    <div class="container logos">
    <div class="row">
        <div class="col-3">
        <img class="img-fluid logo-estsb" src="<?php echo get_template_directory_uri()."/assets/img/logo-estsb.jpg"?>" alt="logo estsb" srcset="">
        </div>
        <div class="col-7 text-center">
        <h4>Ecole supérieure de technologie - Sidi Bennour<h4>
        <h4>المدرسة العليا للتكنولوجبا - سيدي بنور<h4>
        </div>
        <div class="col-2">
        <img class="img-fluid logo-ucd" src="<?php echo get_template_directory_uri()."/assets/img/logo-ucd.jpg"?>" alt="logo ucd" srcset="">
        </div>
    </div>
    </div>
    <!-- end logo -->
    <!-- second navbar -->
    <nav class="navbar second-nav container navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item btn btn-outline-dark">
            <a class="nav-link" aria-current="page" href="<?php echo home_url(  ) ?>"><i class="fa fa-home"></i> Acceuil</a>
            </li>
            <li class="nav-item  btn btn-outline-dark dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Présentation
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Mot du directeur</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">ESTSB en chiffre</a></li>
            </ul>
            </li>
            <li class="nav-item  btn btn-outline-dark dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Formation
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Formation initiale</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Foration continue</a></li>
            </ul>
            </li>
            <li class="nav-item  btn btn-outline-dark dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Recherche
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Structure de recherche</a></li>
                <li><a class="dropdown-item" href="#">Centre des études Doctorales</a></li>
            </ul>
            </li>
            <li class="nav-item  btn btn-outline-dark">
                <a class="nav-link" aria-current="page" href="#">Activités</a>
            </li>
            
            <li class="nav-item  btn btn-outline-dark dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Carrières
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Stage</a></li>
                <li><a class="dropdown-item" href="#">Emploi</a></li>
            </ul>
            </li>
            <li class="nav-item  btn btn-outline-dark">
            <a class="nav-link" aria-current="page" href="#">Calendrier</a>
            </li>
            <li class="nav-item  btn btn-outline-dark">
            <a class="nav-link" aria-current="page" href="#">Contact</a>
            </li>
        </ul>
        <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Que recherchez vous?" aria-label="Search">
            <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
        </form> --><?php get_search_form(  ) ?>
        </div>
    </div>
    </nav>
    <!-- end second navbar -->