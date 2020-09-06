<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'includes/newClass.inc.php';
        $person = new Person();
        $dog = new Dog();

        echo "Person props:</br>";
        echo $person->public;
        //echo $person->protected;
        //echo $person->private;

        echo $person->echoProps();

        echo "Dog method w/ props:</br>";
        echo $dog->echoProps2();

        echo "Person methods:</br>";
        echo $person->fn_public();
        //echo $person->fn_protected();
        //echo $person->fn_private();

        echo "Dog methods 1:</br>";
        echo $dog->fn_public();
        //echo $dog->fn_protected();
        //echo $dog->fn_private();

        echo "Dog methods 2:</br>";
        echo $dog->fn_public_ex();
        //echo $dog->fn_protected_ex();
        //echo $dog->fn_private_ex();
    ?>
    
</body>
</html>