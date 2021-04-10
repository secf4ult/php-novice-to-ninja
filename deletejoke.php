<?php

if (isset($_POST['id'])) {
    $pdo = new PDO('mysql:hostname=localhost;dbname=ijdb;charset=utf8', 'ijdb', '$ME&7QatzN9sUao9Au@c');
    $stmt = $pdo->prepare('DELETE FROM `joke` WHERE id = :id');
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->execute();

    header('Location: jokes.php');
}
