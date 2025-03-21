<?php
/**
 * Déclaration d'inclusion de code JS
 *
 * PHP version 7
 *
 * @category  Include_JS
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>

<!-- Inclure la version locale de jQuery -->
<script src="assets/library/jquery-3.4.1.min.js"></script>

<!-- Bootstrap JS (minifié pour de meilleures performances) -->
<script src="assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>

<!-- Bootstrap Bundle (qui inclut Popper.js nécessaire pour certains composants comme les dropdowns) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<!-- Optionnel : Si vous utilisez DataTables pour gérer les tables interactives -->
<script src="https://cdn.datatables.net/2.2.2/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap4.js"></script>

<!-- Initialisation de DataTables (si vous utilisez DataTables sur des tables avec id="example") -->
<script>
  $(document).ready(function() {
    // Si vous avez une table avec id="example", DataTable sera activé
    new DataTable('#example');
  });
</script>
