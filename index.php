<?php
require_once('vue/head.php');
require_once('modele/db_connect.php');
//resetDb(); // Sert à recharger les tags
// include('modele/traitement_chaine.php');

$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? null;
$op = $_GET['op'] ?? ''; //operation deleted



  // Le contrôleur permet de modifier l'affichage des pages sans avoir recours à des pages supplémentaires
if(isset($_POST['barreRecherche'])) {
  $barreRecherche=trim(filter_input(INPUT_POST, 'barreRecherche',FILTER_SANITIZE_FULL_SPECIAL_CHARS));
  require_once('controller/barreRechercheController.php');
}else{
  switch ($table) {
    case 'tag':
      require('controller/TagController.php');
      break;
    case 'student':
      require('controller/StudentController.php');
      break;
    case 'project':
      require('controller/ProjectController.php');
      break;
    case 'index':
        require('vue/content_index.php');
        break;

    default:
      require('vue/content_index.php');
      break;
  }
}


require_once('vue/foot.php');
