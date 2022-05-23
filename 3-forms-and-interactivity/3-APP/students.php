<!DOCTYPE html>
<html lang="en">

    <!------- PHP Setup ------>
    <?php
        $pageTitle = "Students";

        $studentTypes = ['self-taught', 'university graduate', 'college graduate', 'bootcamp grad'];
        $developerTypes = ['Frontend', 'Backend', 'Devops', 'UX/UI Design', 'Database Administrator'];
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

        <h2>
            Welcome prospective student, you are one step away from joining the team.
            <br>
            Simply fill in the contact form below to finalize your application so we 
            can get in contact with you later.
        </h2>

        <form action="./dump.php" method="post" class="form">
            <input type="text" name='name' placeholder="name" required >
            <input type="text" name='lastname' placeholder="lastname" required >
            <input type="email" name='email' placeholder="email address" required >
            <?php
                foreach ($developerTypes as $type) {
                    echo "
                        <span>
                            <label for='$type-input'> $type </label>
                            <input type='checkbox' name='devType' id='$type-input' value='$type'>
                        </span>
                    ";
                }
            ?>
            <select name="studType">
                <?php
                    for ($i=0; $i < count($studentTypes); $i++) { 
                        echo '<option  value=" ' . $studentTypes[$i] . ' ">' . $studentTypes[$i] . '</option>';
                    }
                ?>
            </select>
            <input type="submit" name="studentSubmit" value="Submit" class="call-to-action-btn">
        </form>

    </body>
    <!------- Body ------->

</html>