<!DOCTYPE html>
<?php
    # Setup :
    session_start();
    $currentPage = "Blue Moon - Login";

    # init datasource if it doesnt exist
    if (!isset($_SESSION['orderDataStore'])) {

        $_SESSION['orderDataStore'] = [];
    }

    # dump array to store all orders in system
    var_dump($_SESSION['orderDataStore']);
?>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./public/css/style.css">
        <title>
            <?php echo $currentPage; ?>
        </title>
    </head>

    <body>
    
    <!-------------------------- Header -------------------------->
        <header>
            
            <h1 class="title">Blue Moon Coffee</h1>

        </header>
    <!-------------------------- Header -------------------------->

    <div class="divider"></div>

    <!-------------------------- Menu -------------------------->
        <main style="text-align: center; padding: 5rem 1rem">
         
            <h2>
                Welcome customer, can you please provide us with a username to help track your order:
            </h2>
            <form action="./src/pages/order.php" method="get">
                <input type="text" name="username" placeholder="Username here please.." required>
                <input type="submit" name="placeOrder" value="Order">
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