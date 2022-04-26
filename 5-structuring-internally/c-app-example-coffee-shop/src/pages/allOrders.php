<!DOCTYPE html>

<?php
    # imports and setup:
    session_start();

    include_once '../includes/coffeeData.php';
    include_once '../includes/Order.class.php';

    $currentPage = "Kitchen Orders";

    # code that displays errors
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    # dump array to store all orders in system
    var_dump($_SESSION['orderDataStore']);

?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../public/css/style.css">
        <title>
            <?php
                echo $currentPage;
            ?>
        </title>
    </head>

    <body>

    <!------------------------- Header ----------------------->
        <header>
            
            <h1 class="title">Blue Moon Coffee</h1>

            <div id="cancel">
                <form action="../includes/cancelOrder.php" method="get">
                    <input type="submit" value="Redirect" name="cancelOrder">
                </form>
            </div>
            
        </header>
    <!-------------------------- Header ------------------------>

    <div class="divider"></div>

    <!-------------------------- Tickets ------------------------>
        <main>

        <h2>
                All current orders:
        </h2>

        <!-- Logic for creating single item on order ticket -->
        <?php
            if (isset($_POST['newOrder'])) {

                # Setup variable for order
                $itemString = "";
                # Setup variable for total price
                $calculatedTotal = 0;
            
                // Create p tag for each individual coffee that has been ordered
                foreach ($coffeeData as $coffee => $price) {
                    
                    if ($_POST[$coffee] > 0) {

                        # itemTotal
                        $itemTotal = $_POST[$coffee] * $price;

                        #       name                price                  no of items                      cost
                        #echo "Item: $coffee - Price: R$price - Unit(s): " . $_POST[$coffee] . " - Total: R$itemTotal <br><br>";
                        $itemString .= "Item: $coffee - Price: R$price - Unit(s): " . $_POST[$coffee] . " - Total: R$itemTotal <br><br>";

                        # Add total of each item to orderTotal
                        $calculatedTotal += $itemTotal;
                    } 
                }
                # display orderTotal to test
                echo $itemString;
                echo "Cost : R $calculatedTotal";

                # Create order object from POST and SESSION data
                $newOrder = new Order(
                    count($_SESSION['orderDataStore']),
                    $_SESSION['customer'],
                    $itemString,
                    $calculatedTotal
                );

                # print object to test instanciation
                # print_r( $newOrder);
                array_push( $_SESSION['orderDataStore'], $newOrder );

                echo $newOrder->displayOrder();
            }
        ?>

        </main>
    <!-------------------------- Tickets ------------------------->

    <div class="divider"></div>

    <!-------------------------- Footer --------------------------->
        <footer>
            <span>
                IG | @bluemoon
            </span>
            <span>
                Facebook | bluemooncoffee
            </span>
            <span>
                Tel | (021)-906-3454
            </span>
            <span>
                Copyright | @ 2022 Blue Moon Coffee
            </span>
        </footer>
    <!------------------------- Footer ----------------------------->

    </body>

</html>