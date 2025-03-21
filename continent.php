<?php
require_once 'inc/manager-db.php'; // Inclure le fichier qui gère la connexion et les requêtes à la base de données
$lesContinents = getContinent(); // Récupérer les continents depuis la base de données
$lesPays = getAllCountries(); // Récupérer les pays (si besoin)
?>

<!doctype html>
<html lang="fr" class="h-100">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Homepage : GeoWorld</title>

  <!-- CSS de Bootstrap -->
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
      dropdown-menu{
max-height: 400px;
overflow-y: auto;
}
    }
  </style>
  <!-- Styles personnalisés -->
  <link href="css/custom.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">
  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">GeoWorld</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(actuel)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lien</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Désactivé</a>
          </li>
          <!-- Menu déroulant Continent -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Continent</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <?php foreach ($lesContinents as $leContinent) : ?>
                <a class="dropdown-item" href="index2.php?name=<?= htmlspecialchars($leContinent->continent); ?>">
                  <?= htmlspecialchars($leContinent->continent); ?>
                </a>
              <?php endforeach; ?>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="todo-projet.php">
              Présentation-Atelier-de-Prof-SLAM
            </a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
      </div>
    </nav>
  </header>

  <!-- Le reste du contenu de la page -->
  
  <!-- jQuery (nécessaire pour Bootstrap 4) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

  <!-- Bootstrap Bundle (contient Popper.js et Bootstrap JS) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
