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
        require __DIR__.'/src/Equipment.php';

        $aragorn = new Warrior('Aragorn');
        $legolas = new Hunter('Legolas');
        $gandalf = new Magus('Gandalf');
        $gimli = new Dwarf('Gimli');
        $boromir = new Warrior('Boromir');
        $potion = new Potion('Potion HP');
        $sword = new Equipement('Sword');
        $shield = new Equipement('Shield');
        
        // Test équipement d'objet
        $aragorn->pick($sword);
        $legolas->pick($shield);
        $aragorn->attack($legolas); 
        $legolas->rangedAttack($gandalf, $gimli); 
        $gandalf->castSpell($aragorn);
        
        // test utilisation d'objet de l'inventaire
        var_dump($aragorn);
        echo $aragorn->name.' ramasse '.$potion->name.' : '.$aragorn->pick($potion);
        var_dump($aragorn);
        var_dump($aragorn->use($potion));
        var_dump($aragorn);

        // Test passage de niveau
        $aragorn->attack($legolas);
        $aragorn->attack($gimli);
        $aragorn->attack($gandalf);
        $aragorn->attack($gimli);
        $aragorn->attack($gandalf);

        //Vérification de l'état des paramètres de chaque personnage
        var_dump($legolas, $aragorn, $gandalf, $gimli, $boromir);


    ?>

</body>
</html>