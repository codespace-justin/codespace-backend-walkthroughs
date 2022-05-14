<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        </style>
               
        <?php
            $loginVariable = false;

            if (isset($_GET['bye'])) {

                $loginVariable = true;
            }
        ?>
    </head>

    <body>
        
        <button id="hi">
            hi
        </button>
        <form action="#" method="get">
            <input type="submit" name="bye" id="bye" value="goodbye">
        </form>

        <p id="hiP" style="color: blue;">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti nisi voluptatum tempore maxime debitis cumque cum, quisquam modi ad est quasi expedita, perferendis atque sint corporis quibusdam eum eos ipsam!
        </p>

        <?php    
            if ($loginVariable == true) {

                require "./templates/bye.php";
                require_once "./includes/items.php";

                foreach ($items as $item => $price) {
                    echo  "<li> $item | $price | <button>Buy</button> </li>";
                }
            }
        ?>

    </body>
</html>