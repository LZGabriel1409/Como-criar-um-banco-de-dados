<?php
// Como passar dados do PHP para o SQL

try {
    $pdo = new PDO(
        "mysql:host=127.0.0.1;dbname=mypocket;charset=utf8", "root", ""
    );

    $sql = $pdo->prepare("INSERT INTO users (nome) VALUES (:nome)");
    $sql->execute(['nome' => "Haroldo"]);
} catch (PDOException $error) {
    die("Erro no banco: " . $error->getMessage());
}