<?php

class UserModel {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getUsers() {
        try {
            $stmt = $this->pdo->query("SELECT * FROM users");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } 
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return [];
        }
    }

    public function getUserById($userId) {
        try {
            $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = :id");
            $stmt->bindParam(':id', $userId, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } 
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }

    }
}
?>
