<?php

require __DIR__.'/Cat.php';


// Un objet (instance de classe)
$bianca = new Cat('Bianca');
// $bianca->name = 'Bianca';
$bianca->fur = 'Blanc';

$mina = new Cat('Mina', 'Siamois');
$mina->fur = 'Noir';

var_dump($bianca);
var_dump($mina);
?>

<h1>Mon premier chat s'appelle <?= $bianca->name; ?></h1>
<p>Il peut faire <?= $bianca->cry() ?></p>