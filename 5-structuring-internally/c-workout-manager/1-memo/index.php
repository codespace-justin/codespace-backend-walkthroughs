<!DOCTYPE html>

<?php include './src/includes/data/premadePlans.php' ?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/css/theme.css">
        <title>Workout Manager</title>
    </head>

    <body class="has-text-white">

        <!-- Header -->
        <header class="section has-background-black">
            <h1 class="title has-text-white">
                Workout Manager
            </h1>
            <nav class="is-flex is-justify-content-space-evenly">
                <button class="button is-danger px-6">
                    { / };
                </button>
                <button class="button is-danger px-6">
                    Order
                </button>
                <button class="button is-danger px-6">
                    About
                </button>
                <button class="button is-danger px-6">
                    Contact
                </button>
            </nav>
        </header>

        <!-- Page -->
        <main class="section has-background-dark" style="min-height: 50vh;">
        
            <h2 class="container">View our premade workout plans here:</h2>

            <br>

            <ul class="columns">
            <?php foreach ($premadePlans as $i => $plan) {
                    echo "
                        <li class='column has-background-danger card has-text-white m-3'>
                            <h2 class='heading'>
                                <u> The ". $plan['level'] . " Plan </u>
                            </h2>
                            <div>"
                                . $plan['level'] .
                            "</div>
                            <div>"
                                . $plan['days'] .
                            "</div>
                            <div>"
                                . $plan['split'] .
                            "</div>
                        </li>
                    ";
                }
            ?>
            </ul>
        </main>

        <!-- Footer -->
        <footer class="section has-background-black columns">
            <p class="column">
                Email - workman@gmail.co.za <br>
                Tel - (021) 906 3454 <br>
                IG - workman@instagram
            </p>
            <p class="column">
                Copyright @ 2022 Workout Manager (pty) limited <br>
                All rights reserved
            </p>
        </footer>

    </body>

</html>