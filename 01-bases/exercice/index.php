<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        require __DIR__.'/Car.php';

        $car1 = new Car('Renault', 'Clio');
        $car1->setColor('Noir');
        $car1->setGas(50);

        var_dump($car1);
    ?>
    <h1>Exercice</h1>
    <p>On va créer une classe Car dans un fichier à part.<br>

    - Une voiture possède 4 roues, une couleur, une marque et un modèle. <br>
    - Une voiture peut être construite avec tous ses attributs. <br>
    - Une voiture peut rouler et klaxonner. <br>

Vous implémenterez un getter et un setter pour la couleur (uniquement la couleur en private). On instanciera au moins 2 voitures. <br>

En bonus, une voiture a une jauge d'essence (50 pour 50L). On réduit la jauge de 2L à chaque fois qu'on appelle la méthode rouler</p>

<h2>Voiture 1</h2>

<p>Ma première voiture est de couleur <?= $car1->getColor() ?></p>

<?php ?>

<?php while($car1->getGas() > 0) { ?>
    <p>Réserve d'essence = <?= $car1->drive() ?></p>
<?php } ?>

<p>Réservoir d'essence = <?= $car1->drive(); ?></p>
<p>Réservoir d'essence = <?=$car1->fill(10)->drive(); ?></p>

</body>
</html>