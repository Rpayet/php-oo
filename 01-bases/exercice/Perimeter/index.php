<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    
    <h1>Exercice Classes</h1>

    <?php  

        require __DIR__.'/Rectangle.php';
        require __DIR__.'/Calculator.php';

        $r = new Rectangle(10, 20);
        echo $r->perimeter(); // 60
        var_dump($r->isValid()); // true
        $r2 = new Rectangle(-10, 20);
        var_dump($r2->isValid()); // false


        $c = new Calculator();
        $c->add(10)->substract(4);
        // $c->multiply(2)->divide(4);
        // echo $c->result(); // 3

    ?>


</body>
</html>