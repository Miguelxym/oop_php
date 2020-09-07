<?php 
    declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include 'includes/autoloader.inc.php';
    try{
        $person = new Person\Person('Alberto', 'Malhado', 33);
        var_dump($person->getPersonData());
    } catch (TypeError $e){
        echo "ERROR: {$e->getMessage()}";
    }
    try{
        $house = new House('Av. Liberdade', 33, '4000-200');
        var_dump($house->getHouseData());
    } catch (TypeError $e){
        echo "ERROR: {$e->getMessage()}";
    }
    ?>

</body>

</html>