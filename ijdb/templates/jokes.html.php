<?php foreach ($jokes as $joke) : ?>
    <blockquote>
        <p>
            <?= htmlspecialchars($joke, ENT_QUOTES); ?>
        </p>
        <span>
            <a href="/deletejoke.php?id=<?= $joke['id'] ?>">delete</a>
        </span>
    </blockquote>
<?php endforeach; ?>