<?php
/**
 * Home Page
 *
 * PHP version 7
 *
 * @category  Page
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */

require_once 'header.php'; 
require_once 'inc/manager-db.php'; // Inclure le fichier qui gère la connexion et les requêtes à la base de données

// Vérifier si un continent est sélectionné, sinon afficher tous les pays
if (isset($_GET['name']) && !empty($_GET['name'])) {
    $continent = $_GET['name'];
    $desPays = getCountriesByContinent($continent);
} else {
    $continent = "Monde";
    $desPays = getAllCountries();
}

?>

<main role="main" class="flex-shrink-0">
  <div class="container">
    <!-- Affichage du titre -->
    <h1>Les pays en <?= htmlspecialchars($continent) ?></h1>

    <div>
      <table class="table">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Population</th>
            <th>Président</th>
            <th>Surface</th>
            <th>Capitale</th> <!-- Nouvelle colonne pour la capitale -->
          </tr>
        </thead>
        <tbody>
          <?php 
          // Vérifiez si $desPays contient des pays
          if (!empty($desPays)) {
              foreach ($desPays as $pays) { ?>
                  <tr>
                    <td><?= htmlspecialchars($pays->Name) ?></td>
                    <td><?= htmlspecialchars($pays->Population) ?></td>
                    <td><?= htmlspecialchars($pays->HeadOfState) ?></td>
                    <td><?= htmlspecialchars($pays->SurfaceArea) ?></td>
                    <td><?= htmlspecialchars($pays->Capital) ?></td> <!-- Affichage de la capitale -->
                  </tr>
              <?php }
          } else {
              echo "<tr><td colspan='5'>Aucun pays trouvé.</td></tr>"; // Modification du colspan pour 5 colonnes
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</main>
