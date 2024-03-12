<?php


try {
  
    $dsn = 'mysql:host=127.0.0.1;dbname=SmartBike;charset=utf8mb4;port=8889';
    $username = 'root';
    $password = 'root';
    $pdo = new PDO($dsn, $username, $password);

    $veloId = isset($_POST['velo']) ? htmlspecialchars($_POST['velo']) : null;
    $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : null;
    $prenom = isset($_POST['prenom']) ? htmlspecialchars($_POST['prenom']) : null;
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : null;
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : null;

    $insertCommandeQuery = "INSERT INTO commandes (velo_id, nom, prenom, email, message) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($insertCommandeQuery);
    $stmt->execute([$veloId, $nom, $prenom, $email, $message]);


    header("Location: ?page=commande_success"); 

    exit(); 
} catch (PDOException $e) {
    echo "Erreur lors du traitement de la commande : " . $e->getMessage() . "\n";
}
?>
