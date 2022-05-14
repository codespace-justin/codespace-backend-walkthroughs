
<!DOCTYPE html>
<html lang="en">

    <!-- PHP Header scripts -->
    <?php

    /**
     * Walkthrough : Alphabet Soup
     * Description : Getting String input from a user and sorting it
     * Date : 28/04/2022
     * Author : Justin
     */

    session_start();

    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        Alphabet Soup
    </h1>

    <hr>
    <br>

    <form action="./sort.process.php" method="get">
        <input type="text" placeholder="Please insert a string or word to be sorted." name="stringInput">
        <input type="submit" value="Sort" name="submitSort">
    </form>

    <br>
    <hr>

    <h2>Ouput:</h2>
    <?php
        if (isset($_SESSION['output'])) {
            echo $_SESSION['output'];
        } 
    ?>

</body>

</html>