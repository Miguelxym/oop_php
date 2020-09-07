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
        $food = new Food('Avocado Pancakes', '
        In a large bowl, whisk together flour, baking powder, and salt. 
        In a medium bowl, mash avocado and lime juice with a fork until smooth. Whisk in honey, lime zest, and buttermilk. Add eggs and vanilla and whisk until fully combined. 
        Add wet ingredients to dry ingredients and stir with a wooden spoon or spatula until just combined. 
        In a large skillet over medium-low heat, melt a thin pat of butter to coat the bottom of the skillet. Ladle ¼ cup pancake batter into skillet, then use the bottom of the measuring cup to smooth batter into a 4 ½"-wide pancake. Top with a few blueberries if desired, then cook until bubbles start to form in batter and pancake is golden underneath, about 3 to 4 minutes. 
        Flip and cook the other side until golden, 3 to 4 minutes more. Repeat with remaining batter.
        Serve pancakes with butter, maple syrup, and more blueberries.');

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

        $food->getFoodData();

        echo "</br>".ScareJump::$shout;

        ScareJump::setShout("AHHHHHHHHHHHHH");

        echo "</br>".ScareJump::$shout;
    ?>
    
</body>
</html>