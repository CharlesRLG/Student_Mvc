<section id="tableTag">
  <table>

    <tr>
      <th>Id</th>
      <th>Nom</th>
      <th>Description</th>
      <td class="caseModifColor"><a href="index.php?table=tag&id=0&op=insert">➕</a></td>
    </tr>


    <?php
    foreach ($tags as $tag1) { ?>
      <tr>
        <td><?= $tag1['id'] ?></td>
        <td><?= $tag1['name'] ?></td>
        <td><?= $tag1['description'] ?></td>
        <td class="caseModifColor"><a href="index.php?table=tag&id=<?= $tag1['id'] ?>&op=update">🖊️</a></td>
        <td class="caseModifColor"><a href="index.php?table=tag&id=<?= $tag1['id'] ?>&op=delete">❌</a></td>
        

      </tr>
    <?php } ?>

  </table>
</section>