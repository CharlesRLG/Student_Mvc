<?php
require_once('vue/head.php');
require_once('modele/db_connect.php');
//resetDb(); // Sert à recharger les tags
include('modele/traitement_chaine.php');

$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? null;
$op = $_GET['op'] ?? ''; //operation deleted


// echo __LINE__."<br>";
// if(isset($_POST["motsClee"]) && $_POST["motsClee"] != "") {
//   echo __LINE__."<br>";
//   $mots_cles = strtolower(utf8_decode($_POST["motsClee"]));
//   $mots_cles = supprAccents(supprSpeciaux($mots_cles));
//   $mots_a_exclure = "avec|pour|dans|";
//   $tableau_exclure = explode("|",$mots_a_exclure);
//   $requete_et = "SELECT * FROM src_mariadb  ";
//   echo __LINE__."<br>";
//   var_dump($mots_cles);

//   for($i=0;$i<sizeof($tableau_exclure);$i++)
//   {
//     $mots_cles = str_replace($tableau_exclure[$i],"", $mots_cles);
//   }

//   $mots_cles = str_replace("   "," ",str_replace("  "," ",$mots_cles));
//   $mots_cles = str_replace("-"," ",$mots_cles);
//   return $mots_cles;
//   echo $mots_cles;
// }echo __LINE__."<br>";

// Le contrôleur permet de modifier l'affichage des pages sans avoir recours à des pages supplémentaires
?>
<section id="container">
  <?php
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
  ?>
</section>

<?php
require_once('vue/foot.php');
