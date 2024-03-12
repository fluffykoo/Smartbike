
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Détails du Vélo</title>
</head>
<body>



<div class="details-container">
    <div class="details-info">
        <h2>Détails du Vélo</h2>

        <?php

        $veloId = isset($_GET['velo']) ? $_GET['velo'] : null;

        if ($veloId) {
            $pdo = connectToDatabase();
            $smartbike = new Smartbike($pdo);
            $veloDetails = $smartbike->getVeloDetails($veloId);

            if ($veloDetails) {
                echo "<p>Nom: " . $veloDetails['nom'] . "</p>";
                echo "<p>Description: " . $veloDetails['description'] . "</p>";
                echo "<p>Prix: " . $veloDetails['prix'] . "</p>";
                echo "<p>Date d'ajout: " . $veloDetails['date_ajout'] . "</p>";
                echo '<a href="?page=commander&velo=' . $veloDetails['id'] . '" class="commander-button">Commander</a>';
            } else {
                echo "Détails du vélo non trouvés.";
            }
        } else {
            echo "Identifiant du vélo non fourni.";
        }

        $pdo = null;
        ?>
    </div>

    <div class="details-image">
        <?php
    
        if ($veloDetails) {
            echo "<img src='" . $veloDetails['photo_path'] . "' alt='Photo du vélo'>";
        }
        ?>
    </div>
</div>


</body>
</html>
