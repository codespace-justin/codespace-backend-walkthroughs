<!DOCTYPE html>

<!-- Imports -->
<?php
    session_start();

    include_once '../includes/coffeeData.php';

    $currentPage = "Place Order";
?>

<!-- Html Page -->
<html lang="en">

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

        <!-- Header -->
        <header>
            
            <h1 class="title">Blue Moon Coffee</h1>
            
            <div id="order-contols" class="order-controls">
                <div id="customer">
                    <?php 
                        echo "Please place your order here " . $_SESSION['customer'];
                    ?>
                </div>
                <div id="cancel">
                    <button>Cancel Order</button>
                </div>
            </div>

        </header>
        <!-- Header -->

        <div class="divider"></div>

        <!-- Menu -->
        <main>
            <form action="./allOrders.php" method="post" id="menu-selection" class="form-row">
                <?php
                foreach ($coffeeData as $coffee => $price) {
                ?>
                    <!-- Column for coffees -->
                    <div class="item-row">
                        <?php echo $coffee; ?>
                    </div>

                    <div class="item-row">
                        R<?php echo $price; ?>
                    </div>
                        
                    <!-- column for user inputs -->
                    <input type="number" name="<?php echo $coffee; ?>" placeholder="quantity">
                <?php
                }
                ?>
                <span style="visibility: hidden;">GRID FILLER</span>
                <span style="visibility: hidden;">GRID FILLER</span>
                <input type="submit" value="Order" name="order" class="order-btn">
            </form>
        </main>
        <!-- Menu -->

        <div class="divider"></div>

        <!-- Footer -->
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
        <!-- Footer -->

    </body>

</html>