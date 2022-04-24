<?php

/*
 * Intro to PHP:
 * Conditionals : IF Statmenets
 * Dice Game 1
 */


# Roll a single dice 
$roll = rand(1, 6);

# You win if you get a 5 or a 6

if ($roll == 6) {

    echo '<p>You win!</p>';

} elseif ($roll == 5) {

    echo '<p>You win!</p>';

} else {

    echo '<p>Sorry, you didn\'t win, better luck next time!</p>';
}
