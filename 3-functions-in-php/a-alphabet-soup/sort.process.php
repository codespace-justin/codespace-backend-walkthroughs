<?php

session_start();

# ========== Declare or create my functions ============= #

// convertToLower
function toLower($upperString) {

    $lowerString = strtolower($upperString);

    return $lowerString;
}

// creates array
function convertString($string) {

    // convert all characters into lower case
    $createdArray = str_split($string);

    return $createdArray;
}

// sort
function sortArray($array) {

    sort($array);

    $outputArray = $array;

    return $outputArray;
}

// convert to string
function convertArray($array) {

    $outputString = implode($array);

    return $outputString;
}


function presentation($old, $new) {
    return "
        <h5>
            Proccess Output:
        </h5>
        <li>
            The uses input was: $old
        </li>
        <li>
            The processed input is: $new
        </li>
    ";
}


# ================ Output ================ #


$userInput = $_GET['stringInput'];
$oldInput =  $_GET['stringInput'];;


# convert to lower case
$userInput = toLower($userInput);
echo $userInput . "<br>";

# convert the string to array so we sort it
$userInput = convertString($userInput);
print_r( $userInput );
echo "<br>";

# sort the given array
$userInput = sortArray($userInput);
print_r( $userInput );
echo "<br>";


# convert the array back into a string to display
$userInput = convertArray($userInput);
echo $userInput . "<br>";


# --- Save to SESSION --- #
/*

$_SESSION['comparison'] = $oldInput;
*/
$outputElement = presentation($oldInput, $userInput);

$_SESSION['output'] = $outputElement;


# ======== Redirect back to index ======= #

header('Location: ./index.php');