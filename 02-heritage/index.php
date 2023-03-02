<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Démo - Héritage</title>
</head>
<body>
    
    <?php

        require __DIR__.'/src/Animal.php';
        require __DIR__.'/src/Cat.php';
        require __DIR__.'/src/Dog.php';
        require __DIR__.'/src/Kennel.php';

        $cat = new Cat('Lais');
        var_dump($cat);

        $dog = new Dog('Milou');
        var_dump($dog);

        $kennel = new Kennel();
        $kennel->keep($cat)->keep($dog);
        var_dump($kennel);

    ?>

    <p><?= $cat->move(); ?></p>
    <p><?= $cat->climbsOnRoof(); ?></p>
    <p><?= $dog->move(); ?></p>

</body>
</html>