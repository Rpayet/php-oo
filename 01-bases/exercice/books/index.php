<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Library</title>
</head>
<body>

    <h1>Exercice Librairie</h1>

    <?php
    
        require __DIR__.'/Book.php';
        require __DIR__.'/Library.php';

        $b = new Book('Harry Potter à l\'école des sorciers', 250);
        echo $b->page(); // 1
        echo '<br />';
        $b->nextPage(); // tourne la page (ne fait rien si on est sur la dernière page)
        echo $b->page(); // 2
        echo '<br />';
        $b->close(); // ferme le livre (reviens à la page 1)
        echo $b->page();
        echo '<br />';
        echo $b->getName(); // Récupère le nom du livre
        echo '<br />';
        echo $b->countPages(); // Récupère le nombre de pages
        echo '<br />';
        while ($b->page() < $b->countPages())
        {
            $b->nextPage();
            
            echo $b->page().'<br/>';
        }

        $l = new Library();
        $l->addBook($b); // Ajoute le livre b dans un tableau
        $l->addBooks([ // Ajoute les livres suivant dans un tableau
            new Book('Chambre des secrets', 300),
            new Book('Prisonnier d\'Azkaban', 400),
            new Book('Coupe de feu', 500),
        ]);
        $l->books(); // Renvoie le tableau avec tous les livres

        echo $l;

    ?>

    
</body>
</html>