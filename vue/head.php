<!doctype html>
<html lang="fr">

<head>
  <title><?= $title ?? 'Base de données : Student' ?></title>
  <link rel="stylesheet" href="vue/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="icon" href="<?= $favicon ?? 'data:;base64,iVBORw0KGgo=' ?>">
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
  <script>
    function addDarkmodeWidget() {
      new Darkmode().showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);
  </script>
  <script src="vue/js/darkmode.js"></script>
</head>

<body>
  <header>
    <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="http://localhost/student_mvc/index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <h3>BDD - Etudiants</h3>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php?content_index" class="nav-link px-2 link-secondary"><p>Home</p></a></li>
          <li><a href="index.php?table=student" class="nav-link px-2 link-dark"><p>Liste des étudiants</p></a></li>
          <li><a href="index.php?table=tag" class="nav-link px-2 link-dark"><p>Liste des Tags</p></a></li>
          <li><a href="index.php?table=project" class="nav-link px-2 link-dark"><p>Liste des projets</p></a></li>
        </ul>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" id="formulaireRecheche" name="formulaireRecheche" method="post" action="index.php" autocomplete="off">
          <input type="search" class="form-control form-control-dark" placeholder="Recherchez..." 
                 aria-label="Search" id="motsClee" name="barreRecherche"/>
          <input type="submit" class="form-control form-control-dark"  
                 aria-label="Search" value="Valider" id="valider"/>
        </form>
      </header>

    <section id="centrage">
    