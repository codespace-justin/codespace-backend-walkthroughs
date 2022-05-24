<?php
    
    $pageTitle = "Checkout";

    include "../includes/data.inc.php";

    if (isset($_POST['confirm'])) {

        // once user has sent data and has confirmed their order we can start the session
        session_start();

        // save post data to local variable
        $amount = $_POST['amount'];

        // calculate total from post data and amount in data.inc.php
        $subTotal = $amount * $price;

    }
    
?>

<!-- ==================================================================== -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php echo $pageTitle ;?>
        </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>

    <body>
    
    <h1 class="title has-background-warning p-5">
            Deez Donuts
        </h1>

        <hr>
        <br>

        <h2>
            Thank you for your purchase!
        </h2>

        <hr>
        <br>

        <main class="container">

            <!-- Grid for menu -->
            <div class="has-background-warning">
                <article class="message is-dark">
                    <div class="message-header">
                        <p>Your Order:</p>
                    </div>
                    <div class="message-body">
                        <ul>
                            <li>
                                Donut Flavor : <?php echo $_SESSION['customerChoice']?>
                            </li>
                            <li>
                                Quantity of Donuts : <?php echo $amount; ?>
                            </li>
                            <li>
                                Amount Due : R<?php echo $subTotal; ?>, 00
                            </li>
                        </ul>
                    </div>
                </article>
            </div>

            <div class="columns is-centered">
                <div class="column">
                    <button class="button is-primary">
                        PAY
                    </button>
                </div>
                <div class="column">
                    <button class="button is-danger">
                        CANCEL ORDER
                    </button>
                </div>
            </div>

        </main>

    </body>

</html>