<?php

$pageTitle = "Menu";

include "./includes/data.inc.php";

?>

<!-- ==================================================================== -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo $pageTitle; ?>
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
        <style>
            .grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }
        </style>
    </head>

    <body class="p-1">

        <h1 class="title has-background-warning p-5">
            Deez Donuts
        </h1>

        <hr>
        <br>

        <main class="container">

            <!-- Grid for menu -->
            <div class="grid has-background-warning">
                <?php
                foreach ($menu as $menuItem) {
                    echo '
                        <div class="column m-3">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-4by3">
                                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                                    </figure>
                                </div>
                            </div>
                            <form action="./pages/process.php" method="get">
                                Order : <input class="button is-dark" type="submit" name="order" value=" '.$menuItem.' ">
                            </form>
                        </div>
                    ';    
                    }
                ?>
            </div>

        </main>

    </body>

</html>