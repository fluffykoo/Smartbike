<?php

include("model/velosModel.php"); 

$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

if ($page == 'accueil') {
    $pdo = connectToDatabase();
    $smartbike = new Smartbike($pdo);
    $latestVelo = $smartbike->getLatestVelo();
    $tousLesVelos = $smartbike->getAllVelos();

    include('view/accueil.php');
} elseif ($page == 'velos') {
    include('view/velos.php');
} elseif ($page == 'produit') {
    include('view/velo_details.php');
}elseif ($page == 'commander') {
    include('view/commander.php');
}elseif ($page == 'process_commande') {
    include('controller/process_commande.php');
}elseif ($page == 'commande_success') {
    include('view/commande_success.php');
}elseif ($page == 'contact') {
    include('view/contact.php');
} else {
    echo 'page introuvable';
}
