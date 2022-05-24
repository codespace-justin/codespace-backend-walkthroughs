<!DOCTYPE html>
<html lang="en">

<!-- PHP -->
<?php

// Menu
$GLOBALS['dataStore'] = [

    $newDonut1 = [
        'id' => 2,
        'flavor' => "Caramel"
    ],

    $newDonut2 = [
        'id' => 11,
        'flavor' => "Jam"
    ]
];

// Getting user input
if (isset($_POST['createDonut'])) {
    
    // saving the id and flavor inputs from name attributes in form
    $inputId = $_POST['id'];
    $inputFlavor = $_POST['flavor'];

    $newDonut = [
        'id' => $inputId,
        'flavor' => $inputFlavor
    ];

    // add new Donut to list of Donuts in datastore
    array_push($GLOBALS['dataStore'], $newDonut);

}

?>

<!-- Head -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deez Donuts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>

<!-- Body -->

<body class="p-5">

    <h2 id="title" class="title">
        List of Donuts
    </h2>

    <ul class="container">
        <?php                  
        foreach ($dataStore as $donut) {
            echo "
                <br>
                <li class='has-background-danger p-5'>
                    " . $donut['id'] . " | " . $donut['flavor'] . " | <button> Buy </button>
                </li>     
                <br>
            ";
        }
        ?>
    </ul>

    <div>
        <h3 style="text-align: center;">
            Create new Donut
        </h3>
        <form action="#" method="post" >
            <label for="">ID</label>
            <input type="number" name="id">
            <br>
            <label for="">Flavor</label>
            <input type="text" name="flavor">
            <br>
            <input class="button is-primary" type="submit" value="create" name="createDonut">
        </form>
    </div>

</body>

</html>