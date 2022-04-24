<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code 4 ZA</title>
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Setup Mock user -->
    <?php
    $studName = "Inga Ngozi";
    $studNo = "#22b1";
    $studCourse = "design";
    ?>

    <!-- Start of webpage: -->
    <h1>
        Code 4 ZA
    </h1>
    <hr>
    <h3>
        Welcome <?php echo "$studName"; ?> We will direct you to the correct Department shortly.
    </h3>

    <br>

    looking up student with number of <?php echo "$studNo.."; ?>

    <!-- logic to route to different webspage -->
    <?php

        # key is value to check
    switch ($studCourse) {

        # case is a criteria
        case 'backend':
            # logic that runs if key and case are the smae
            header('Refresh: 3; URL=backendDept.html'); 
            break;

        case 'frontend':
            header('Refresh: 3; URL=frontendDept.html'); 
            break;

        case 'networking':
            header('Refresh: 3; URL=networkingDept.html'); 
            break;

        case 'design':
            header('Refresh: 3; URL=designDept.html'); 
            break;

        default:
            echo "Oops, we're sorry but its seems theres a mistake with finding your department. <br>"
                . "We will send an email to $studNo@c4cpt.ac.za to notify you when the issue has been resolved. <br>"
                . "Apologies again, <br> Code 4 CPT Admin";
            break;
    }

    ?>

</body>

</html>