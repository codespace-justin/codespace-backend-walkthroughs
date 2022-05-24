<?php
    
    $pageTitle = "Confirm Order";

    // choice is the name given to the submit button on the menu page, so 
    // we are checking to see if a user chose a menu item

    #var_dump($_GET['order']);

    if (isset($_GET['order'])) {

        // once user has sent data we can start the session
        session_start();

        // once sessin has started we can use the session superglobal and the
        // data stored in it anywhere on our site/app
        $_SESSION['customerChoice'] = $_GET['order'];  
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
        <style>
            .grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }
        </style>
    </head>

    <body>

    <h1 class="title has-background-warning p-5">
            Deez Donuts
        </h1>

        <hr>
        <br>

        <main class="container">

            <!-- Grid for menu -->
            <div class="has-background-warning">


                <form class="box grid" action="./checkout.php" method="post">
                    <div class="button">
                    <?php 
                        echo $_SESSION['customerChoice']; 
                    ?>
                    </div>
                    <input type="number" name="amount" required>
                    <input type="submit" name="confirm" value="confirm order">
                </form>
            </div>

        </main>
        
    </body>

</html>