<?php

/*
 * Intro to PHP:
 * Conditionals : IF Statmenets
 * Dice Game 2
 */

// get two random numbers and save to variables
$roll1 = rand(1, 6);
$roll2 = rand(1, 6);

// print statement to display what uses rolled
echo '<p>You rolled a ' . $roll1 . ' and a ' . $roll2 . '</p>';

// perform business logic
if ($roll1 == 6 && $roll2 == 6) {

    echo '<p>You win!</p>';

} else {

    echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
}

echo '<p>Thanks for playing</p>';
