<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jokes.css">
    <title><?= $title ?></title>
</head>

<body>

    <head>
        <h1>Internet Joke Database</h1>
    </head>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Jokes</a></li>
            <li><a href="addjoke.php">Add a new jok</a></li>
        </ul>
    </nav>

    <main><?= $output ?></main>

    <footer>
        &copy; IJDB 2021
    </footer>
</body>

</html>