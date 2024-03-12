
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Liste des vélos</title>
</head>
<body>

  <h1>Liste des vélos</h1>

  <?php
  $pdo = connectToDatabase();
  $smartbike = new Smartbike($pdo);

  $tousLesVelos = $smartbike->getAllVelos();

  if ($tousLesVelos) {
      echo '<div class="velos-container">';

      foreach ($tousLesVelos as $velo) {
          echo '<div class="velo-item">';
          echo "<img src='" . $velo['photo_path'] . "' alt='Photo du vélo'>";
          echo "<p class='velo-price'>Prix: $" . $velo['prix'] . "</p>";
          echo "<a class='velo-details' href='?page=produit&velo=" . $velo['id'] . "'>Plus d'infos</a>";
          echo "<a class='velo-commander' href='?page=commander'>Commander</a>";
          echo '</div>';
      }

      echo '</div>';
  } else {
      echo "Aucun vélo disponible pour le moment.";
  }
  ?>

</body>
</html>
