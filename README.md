# Geoworld 

![world](./images/world-logo.png)

[source blender de l'image](https://www.blendernation.com/wp-content/uploads/2019/03/Ring_Of_Iron04_branded.png)

Projet pédagogique pour étudiant apprenti développeur.

### Prérequis :

* Base de PHP
* Base de SQL
* Base de HTML/CSS

### Prétention du projet

* Apprendre à travailler sur la base d'un existant simple
* Apprendre à respecter des conventions de codage
* Initier à une architecture 3 tiers Web simple
* Développer la créativité
* Un peu de méthodologie (user story, trello, phpcs, ...)

### Limite du projet 

* Pas d'usage de framework pour la structuration du projet 
* Pas de prise en compte de la sécurité au début du projet
* Pas une initiation au gestionnaire de version `git` non plus
* Pas de problématique de déploiement (à dockeriser ?)

Initié au lycée Léonard de Vinci - 77000 Melun

### Point d'entrée

![copie ecran](./images/projet-attendus.png)
 jc was here !!!
 <?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>
<!doctype html>
<html lang="fr" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Homepage : GeoWorld</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">GeoWorld</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Continent</a>
            <ul class="dropdown-menu">
              <li><a href="continent.php?name=Asia">Asie</a></li>
              <li><a href="continent.php?name=Europe">Europe</a></li>
              <li><a href="continent.php?name=Africa">Afrique</a></li>
              <li><a href="continent.php?name=North America">Amérique du Nord</a></li>
              <li><a href="continent.php?name=South America">Amérique du Sud</a></li>
              <li><a href="continent.php?name=Oceania">Océanie</a></li>
              <li><a href="continent.php?name=Antarctica">Antartic</a></li>
            </ul>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="todo-projet.php">
              Présentation-Atelier-de-Prof-SLAM
            </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </header>
  <?php
<?php
require_once 'inc/manager-db.php';
$lesContinents = getContinent() ;
$lesPays = getAllCountries();
//var_dump($lesContinents);
?>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-
toggle="dropdown" aria-haspopup="true"
aria-expanded="false">Continent</a>
<div class="dropdown-menu" aria-labelledby="dropdown01">
<?php foreach($lesContinents as $leContinent) : ?>
<a class="dropdown-item" href="index2.php?name=<?= $leContinent-
>continent ; ?>"><?= $leContinent->continent; ?> </a>
<?php endforeach ; ?>
</div>
</li>



