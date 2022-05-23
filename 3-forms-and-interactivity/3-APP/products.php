<!DOCTYPE html>
<html lang="en">

    <!------- PHP Setup ------>
    <?php
        $pageTitle = "Products";

        $productsArray = [
            'Creating Management Systems',
            'Building Websites',
            "Developing 3rd party API's"
        ];

        $productsContent = [
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, est voluptas laudantium quidem nihil incidunt quibusdam quae deserunt commodi, amet, labore dolorem. Dolorum itaque veniam, ab consectetur ut vel quia!',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, a expedita delectus dolorum exercitationem harum voluptates dolores quae optio natus magni similique mollitia nihil possimus tempora officiis consequatur voluptas animi.',
            'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores assumenda asperiores blanditiis excepturi numquam error velit deleniti, facilis veniam eligendi rem ratione voluptas quos, itaque atque quam ipsum ullam magni.'
        ];

        if (isset($_GET['productSubmit'])) {

            var_dump($_GET['productSubmit']);

            // header('location: products.php?id=" ' . trim($_GET['id']). ' "');
            // exit();
        }
        
    ?>
    <!------- PHP Setup ------->

    <!------- Head ------->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>
            <?php
                echo $pageTitle;
            ?>
        </title>
    </head>
    <!------- Head ------->

    <!------- Body ------->
    <body>

        <h1 id="page-title">
            <?php echo $pageTitle; ?>
        </h1>


        <!-- Projects -->
        <div class="box">
            <h2>
                Projects We are working on:
            </h2>
            <div style="display: flex; justify-content: center;">
            <?php for ($i=0; $i < 3; $i++) { 
                echo "
                        <img src='./img/project-preview.jpg' alt='project preview img' width='30%'> ---
                    ";
                }?>
            </div>
        </div>
        <!-- Projects -->

        <br>

        <!-- Services -->
        <h2>
            Take a more in-depth look into the list of our services.
        </h2>

        <section>

            <?php for ($i=0 ; $i < 3 ; $i++) {
                echo "
                    <br>
                    <br>
                    <div class='box'>
                        <h3 id=' " . $productsArray[$i]. " '>
                            " . $productsArray[$i] . " 
                        </h3>
                        <ul>
                            <li>
                                " . $productsContent[$i] . "
                            </li>
                            <br>
                            <li>
                                " . $productsContent[$i] . "
                            </li>
                            <br>
                            <li>
                                " . $productsContent[$i] . "
                            </li>
                            <br>
                            <div>
                                <img src='' alt='project_preview' width='400px' height='200px'>
                            </div>
                            <br>
                            <button class='call-to-action-btn'> Enquire </buttton>
                        </ul>
                    </div>
                    <br>
                    <br>
                ";
            } ?>

        </section>
        
        <!-- Contact -->
        <section>
            <h2 style="text-align: center;">
                Product Enquiry
            </h2>
            <h3 style="text-align: center;">
                Please fill in the following form and select the service you are interested in:
            </h3>
            <form action="#" method="get" class="form">
                <input type="text" placeholder="name" required >
                <input type="text" placeholder="lastname" required >
                <input type="email" placeholder="email address" required >
                <select name="prospect">
                    
                    <?php
                    foreach($productsArray as $product) {
                        echo "<option value='$product'> $product </option>";
                    }
                    ?>

                </select>
                <input type="submit" name="submit" value="Submit" class="call-to-action-btn">
            </form>
        </section>

    </body>
    <!------- Body ------->

</html>