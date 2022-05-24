<!DOCTYPE html>
<html lang="en">

<!-- Initialize Data from datastore file -->
<?php

    if (!isset( $_SESSION['products'] )) {

        require_once './src/includes/productDatastore.php';
        $_SESSION['products'] = $productDatastore;
    }

    var_dump($_SESSION['products']);

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>

    <!-------------------------- Header -------------------------->
    <header>

        <h1>
            Blue Moon Coffee
        </h1>

        <br><hr><br>

    </header>
    <!-------------------------- Header -------------------------->

    <!-------------------------- Footer -------------------------->
    <main>

        <h2>Place your order:</h2>

        <form action="" method="post">
            <select name="product" id="product-select">
                <option value="">Choose</option>
                <?php
                foreach ( $_SESSION['products'] as $product => $price) {
                ?>
                    <option value="<?php echo $product?>" >
                        <?php echo "$product - R$price"; ?>
                    </option>
                <?php
                }
                ?>
            </select>
            <input type="number" name="milk" placeholder="ml of milk">
            <input type="number" name="sugar" placeholder="spoons of sugar">
            <input type="submit" value="Order" name="submitOrder">
        </form>

    </main>
    <!-------------------------- Footer -------------------------->

    <!-------------------------- Footer -------------------------->
    <footer>
        
        <br><br><hr><br>

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