<?php

if (isset($_POST['joketext'])) {
    try {
        $pdo = new PDO('mysql:hostname=localhost;dbname=ijdb;charset=utf8', 'ijdb', '$ME&7QatzN9sUao9Au@c');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare('INSERT INTO `joke` SET `joketext` = :joketext, `jokedate` = CURDATE();');
        $stmt->bindValue(':joketext', $_POST['joketext']);
        $stmt->execute();

        header('Location: jokes.php');
    } catch (PDOException $e) {
        $title = 'An Error has occurred.';
        $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
} else {
    $title = 'Add a new joke';
    ob_start();

    include './templates/addform.html.php';

    $output = ob_get_clean();
}

include './templates/layout.html.php';
