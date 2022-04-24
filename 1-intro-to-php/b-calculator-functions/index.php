
<html lang="en">
        
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator Functions</title>
    </head>

    <body>
        
        <?php

            # ----- Setup variables ----- #

            $numOne = 10;
            $numTwo = 20;


            # ----- Examples ----- #

            # Add
                $add = $numOne + $numTwo;
                echo 'Addition : ' . $add . "<br><br>";

            # Subtract
                $subtract = $numTwo - $numOne;
                echo 'Subtraction : ' . $subtract . "<br><br>";

            # Mulitiply
                $multi= $numOne * $numTwo;
                echo 'Multiplication : ' . $multi . "<br><br>";

            # Division
                $division = $numTwo / $numOne;
                echo 'Division : ' . $division . "<br><br>";

            # Modulo
                $random = rand(100, 1000); # generate random number between 100 and 1000
                $modulo = $random % $num1;
                
                echo "Remainder of $random divided by $num1 is : $modulo <br><br>";

            # Incrementing
                echo 'Incrementing numOne : ' . $numOne++ . "<br><br>";
    
            # Decrementing
                echo 'Decrementing numOne : ' . $numOne-- . "<br><br>";

        ?>

    </body>

</html>