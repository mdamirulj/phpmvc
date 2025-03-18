<?php

require_once __DIR__ . '/../../config.php';

class User {
    protected $table = "users";

    public function getAllUsers() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        return $stmt->execute([$name, $email]);
    }
}
