<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice - RPG</title>
</head>
<body>
    
    <?php
    
        require __DIR__.'/src/Character.php';
        require __DIR__.'/src/Warrior.php';
        require __DIR__.'/src/Hunter.php';
        require __DIR__.'/src/Magus.php';
        require __DIR__.'/src/Dwarf.php';
        require __DIR__.'/src/Item.php';
        require __DIR__.'/src/Potion.php';

        $aragorn = new Warrior('Aragorn');
        $legolas = new Hunter('Legolas');
        $gandalf = new Magus('Gandalf');
        $gimli = new Dwarf('Gimli');
        $boromir = new Warrior('Boromir');
        $potion1 = new Potion('Potion de soin');
        $potion2 = new Potion('Potion de soin');
        $potion3 = new Potion('Potion de soin');

        $aragorn->attack($legolas); // Enlève X points de vie en fonction de la force (Force x 2)
        $legolas->rangedAttack($gandalf, $aragorn, $gimli, $boromir); // Enlève X points de vie si le personnage est chasseur (Force x 3)
        $gandalf->castSpell($aragorn); // Enlève X points de vie en fonction du mana (Mana x 3)
        $aragorn->pick($potion1);
        var_dump($legolas, $aragorn, $gandalf, $gimli, $boromir);
        
        echo $aragorn->name.' trouve '.$potion1->name.' : '.$aragorn->pick($potion1, $potion2, $potion3);
        
    ?>

</body>
</html>