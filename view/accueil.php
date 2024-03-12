

<h1>Accueil</h1>

<?php
include("model/velosModel.php");

$pdo = connectToDatabase();
$smartbike = new Smartbike($pdo);
$latestVelo = $smartbike->getLatestVelo();

if ($latestVelo) {
    echo "<div class='accueil-info-container'>";
    
 
    echo "<div class='accueil-info'>";
    echo "<h2>Dernier Vélo Ajouté</h2>";
    echo "<p>Nom: " . $latestVelo['nom'] . "</p>";
    echo "<p>Description: " . $latestVelo['description'] . "</p>";
    echo "<p>Prix: " . number_format($latestVelo['prix'], 2) . " €</p>";
    echo "<p>Date d'ajout: " . date('d/m/Y', strtotime($latestVelo['date_ajout'])) . "</p>";
    echo "</div>";
    
    
    echo "<div class='accueil-image'>";
    echo "<img src='" . $latestVelo['photo_path'] . "' alt='Photo du dernier vélo ajouté'>";
    echo "</div>";
    
    echo "</div>";
} else {
    echo "Aucun vélo disponible pour le moment.";
}
?>
