<!DOCTYPE html>
<html lang="en">

<!--------------- Setup ------------->
<?php

    # setup
    session_start();
    include_once '../includes/coffeeData.php';

    $currentPage = "Place Order";

    # test coffeeData.php     
        // print_r( $_POST);
        // echo '<br>';
        // print_r($_POST['americano']);

    /* foreach ($coffeeData as $coffee => $cost) {
            print_r($_POST[$coffee]);
            echo $_POST[$coffee];
            echo "<br>";
    }*/

    # dump array to store all orders in system
    var_dump($_SESSION['orderDataStore']);
        
    # Only display page if user came via index.php
    if ($_GET['placeOrder']) {
        
        $_SESSION['customer'] = $_GET['username']; 
?>
<!------------------- Html Page ------------------------->

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../public/css/style.css">
        <title>
            <?echo $currentPage ?>
        </title>
    </head>

    <body>

    <!-------------------------- Header -------------------------->
        <header>
            
            <h1 class="title">Blue Moon Coffee</h1>
            
            <div id="order-contols" class="order-controls">
                <div id="customer">
                    <?php 
                        echo "Please place your order here <b>" . $_SESSION['customer'] . "</b>"; 
                    ?>
                </div>
                <div id="cancel">
                    <form action="../includes/cancelOrder.php" method="get">
                        <input type="submit" value="Cancel Order" name="cancelOrder">
                    </form>
                </div>
            </div>

        </header>
    <!-------------------------- Header -------------------------->

    <div class="divider"></div>

    <!-------------------------- Menu -------------------------->
        <main>
            <form action="./allOrders.php" method="post" id="menu-selection" class="form-row">
                <?php
                foreach ($coffeeData as $coffee => $price) {
                ?>
                    <!-- Column for coffees -->
                    <fieldset class="item-row">
                        <?php echo $coffee; ?>
                    </fieldset>

                    <fieldset class="item-row">
                        R<?php echo $price; ?>
                    </fieldset>
                        
                    <!-- column for user inputs -->
                    <input type="number" name="<?php echo $coffee; ?>" placeholder="quantity" value="0">
                <?php
                }
                ?>
                <fieldset style="visibility: hidden;">GRID FILLER</fieldset>
                <fieldset style="visibility: hidden;">GRID FILLER</fieldset>
                <input type="submit" value="Order" name="newOrder" class="order-btn">
            </form>
        </main>
    <!-------------------------- Menu -------------------------->

    <div class="divider"></div>

    <!-------------------------- Footer -------------------------->
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
    <!-------------------------- Footer -------------------------->

    </body>

</html>

<?php
    } else {
        echo "Error 403: Unauthorized Access";
    }
?>