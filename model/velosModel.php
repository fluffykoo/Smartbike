<?php

if (!class_exists('Smartbike')) {
    class Smartbike {
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function getLatestVelo() {
            $query = "SELECT * FROM velos ORDER BY date_ajout DESC LIMIT 1";
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            $latestVelo = $statement->fetch(PDO::FETCH_ASSOC);

            return $latestVelo;
        }

        public function getAllVelos() {
            $query = "SELECT * FROM velos";
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            $allVelos = $statement->fetchAll(PDO::FETCH_ASSOC);

            return $allVelos;
        }

        public function getVeloDetails($veloId) {
            $query = "SELECT * FROM velos WHERE id = :velo_id";
            $statement = $this->pdo->prepare($query);
            $statement->bindParam(':velo_id', $veloId, PDO::PARAM_INT);
            $statement->execute();
            $veloDetails = $statement->fetch(PDO::FETCH_ASSOC);

            return $veloDetails;
        }
    }
}

if (!function_exists('connectToDatabase')) {
    function connectToDatabase() {
        $dsn = 'mysql:host=127.0.0.1;dbname=SmartBike;charset=utf8mb4;port=8889';
        $username = 'root';
        $password = 'root';

        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }
}
