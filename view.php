<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MyBooks - Accueil</title>
        <link rel="stylesheet" href="mybooks.css" />
    </head>
    <body>
        <header>
            <h1>MyBooks</h1> 
        </header>
        <?php
        foreach ($books as $book):
            ?>
            <article>
                <h2><?= $book['book_title'] ?></h2>
                <p><?= $book['book_summary'] ?></p>
            </article>
        <?php endforeach; ?>
        <footer class="footer">
            <strong>MyBook</strong> est construit avec PHP, Silex, Twig et Bootstrap.
        </footer>
    </body>
</html>


