<?php

try {
    $pdo = new PDO('mysql:hostname=localhost;dbname=ijdb;charset=utf8', 'ijdb', '$ME&7QatzN9sUao9Au@c');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $pdo->prepare('SELECT `joketext`, `id` FROM joke');
    $statement->execute();

    foreach ($statement as $row) {
        $jokes[] = $row['joketext'];
    }

    $title = 'Joke list';

    ob_start();

    include './templates/jokes.html.php';

    $output = ob_get_clean();
} catch (PDOException $e) {
    $error = 'Database connection is unable to establish' .
        $e->getMessage() . ' in ' .
        $e->getFile() . ':' . $e->getLine();
}

include __DIR__ . '../templates/layout.html.php';
