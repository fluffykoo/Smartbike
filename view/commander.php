<?php

include("model/velosModel.php");
$pdo = connectToDatabase();
$smartbike = new Smartbike($pdo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Commander</h1>
<form action="?page=process_commande" method="post">
    <label for="velo">Sélectionner un vélo :</label>
    <select id="velo" name="velo" required>
        <?php
        $smartbike = new Smartbike($pdo);
        $tousLesVelos = $smartbike->getAllVelos();

        if ($tousLesVelos) {
            foreach ($tousLesVelos as $velo) {
                echo "<option value='" . $velo['id'] . "'>" . $velo['nom'] . "</option>";
            }
        }
        ?>
    </select>
    <br>

    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>
    <br>

    <label for="message">Message :</label>
    <textarea id="message" name="message" rows="4"></textarea>
    <br>

    <input type="submit" value="Envoyer">
</form>

