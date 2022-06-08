<?php
    
    $choice = $_POST['crud'];
    

    $todos = file_get_contents('file.txt');
    $todoList = explode(',', $todos);


    // Run a switch depending which form was 
    switch ($choice) {

        // create
        case 'create':

            $todo = $_POST['newTodo'];
            trim($todo);

            array_push($todoList, $todo);

            $fileContent = join(',', $todoList);
            file_put_contents("file.txt", $fileContent);

            break;
        
        // delete
        case 'delete':
            
            $index = $_POST['deleteIndex'];
            trim($index);

            array_splice($todoList, $index, 1);

            $fileContent = join(',', $todoList);
            file_put_contents("file.txt", $fileContent);

            break;
        
        // update
        case 'update':
            
            $todo = $_POST['updateTodo'];
            trim($todo);
            $index = $_POST['updateIndex'];
            trim($index);

            array_splice($todoList, $index, 1, $todo);

            $fileContent = join(',', $todoList);
            file_put_contents("file.txt", $fileContent);

            break;            

        default:
            echo "
                <script>
                    console.log('no choice selected yet.')
                </script>
            ";
            break;
    }

?>

<!-- ==================================================================== -->

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>File Fetching</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    </head>

    <body>
        <h1 class="title">
            File Fetching
        </h1>

        <div>

            <div class="box">

                <h2 class="subtitle">
                    All todos:
                </h2>

                <ol>
                    <?php
                        foreach ($todoList as $i => $todo) {
                            
                            echo '
                                <li>
                                    '.$todo.'
                                </li>
                            ';
                        }
                    ?>
                </ol>
            </div>

            <br>
            <hr>

            <!-- Create -->
            <section class="p-3">
                <h2 class="subtitle">
                    Create
                </h2>
                <form action="#" method="post">
                    <input type="text" name="newTodo" placeholder="new todo item..">
                    <input type="submit" name="crud" value="create">
                </form>
            </section>

            <br>
            <hr>

            <!-- Delete -->
            <section class="p-3">
                <h2 class="subtitle">
                    Delete
                </h2>
                <form action="#" method="post">
                    <input type="number" name="deleteIndex" placeholder="index of item to be deleted..">
                    <input type="submit" name="crud" value="delete">
                </form>
            </section>

            <br>
            <hr>

            <!-- Update -->
            <section class="p-3">
                <h2 class="subtitle">
                    Update
                </h2>
                <form action="#" method="post">
                    <input type="number" name="updateIndex" placeholder="todo item index">
                    <input type="text" name="updateTodo" placeholder="updated todo item..">
                    <input type="submit" name="crud" value="update">
                </form>
            </section>

        </div>
        <hr>
    </body>

</html>