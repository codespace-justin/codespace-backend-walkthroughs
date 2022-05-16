<!DOCTYPE html>
<html lang="en">

<?php

    $choice = $_POST['submit'];

    $dataStore = [];

    // creates new
    function create($id, $flavorInput) {

        $newDonut = [
            "id" => $id,
            "flavour" => $flavorInput
        ];

        array_push($newDonut);
    }

    // search specific donut
    function read($id) {

    }

    // updates value fo donut
    function update($id, $newDonut) {

    }

    // delete donut by id
    function delete($id) {

    }

    switch ($choice) {
        case 'create':
            create();
            break;
        
        default:
            # code...
            break;
    }
    
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deez Donuts</title>
</head>
<body>

    <h2>
        List of Donuts
    </h2>

    <ul>
        <?php
        for ($i=0 ; $i < count($dataStore); $i++) { 
            echo "<li>" . $dataStore[$i] . "</li>";
        }
        ?>
        
    </ul>

    <div>
        <h3 style="text-align: center;">
            Create new Donut
        </h3>
        <form action="#" method="post">
            <label for="">ID</label>
            <input type="number" name="id">
            <br>
            <label for="">Flavor</label>
            <input type="text" name="flavor">
            <br>
            <input type="submit" value="create" name="submit">
        </form>
    </div>

</body>
</html>