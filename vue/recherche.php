<?php

// test moteur de recherche 
echo __LINE__."<br>";
$allusers = $pdo->query('SELECT * FROM student ORDER BY id DESC');


if(isset($_POST['barreRecherche']) AND !empty($_POST['barreRecherche'])){
  $recherche = htmlspecialchars($_POST['barreRecherche']);
  $allusers = $pdo->query('SELECT * FROM student WHERE firstname LIKE"%'.$recherche.'%" ORDER BY id DESC');
}
?>
<section class="afficher_utilisateur">
<?php

if(isset($_POST['barreRecherche'])){
    if($allusers->rowCount() > 0){
      while($user = $allusers->fetch()){
        ?>
        <section id="container">
            <table>
        <tr>
          <td><?= $user['firstname'] ?></td>
          <td><?= $user['lastname'] ?></td>
          <td><?= $user['email'] ?></td>
          <td><?= $user['created_at'] ?></td>
          <td><?= $user['updated_at'] ?></td>
          <td><a href="index.php?table=student&id=<?= $user['id'] ?>&op=update">🖊️</a></td>
          <td><a href="index.php?table=student&id=<?= $user['id'] ?>&op=delete">❌</a></td>
          <td><a href="index.php?table=student&id=<?= $user['id'] ?>&op=insert">➕</a></td>
        </tr>
        </table>
        </section>
        <?php
      }

    }else{
      ?>
      <p>Aucun utilisateur trouvé !</p>
      <?php
    }
}
    ?>