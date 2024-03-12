<?php
include("model/velosModel.php");


$veloId = isset($_GET['velo']) ? $_GET['velo'] : null;


$pdo = connectToDatabase();


$veloDetails = getVeloDetails($pdo, $veloId);



if ($veloDetails) {
    include("view/velo_details.php"); 
} else {
    echo "Aucun détail de vélo disponible pour le moment.";
}



$pdo = null;
?>
