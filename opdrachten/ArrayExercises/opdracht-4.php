<?php

$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
function tempCalculator($array)
{
    $sum = 0;
    $count = 0;
    asort($array);

    foreach ($array as $value) {
        $sum += $value;
        $count++;
    }
    $average = $sum / $count;
    echo "The average temperature is " . $average . "<br>";

    $lowest = array_slice($array, 0, 7);
    echo "List of seven lowest temperatures :";
    for ($i = 0; $i < count($lowest); $i++) {
        if ($lowest[$i] < $average) {

            echo $lowest[$i] . " ";
        }
    }
    echo "<br>";
    $highest = array_slice($array, -7);
    echo "List of seven highest temperatures :";
    for ($i = 0; $i < count($highest); $i++) {
        if ($highest[$i] > $average) {
            echo  $highest[$i] . " ";
        }
    }
}

tempCalculator($temp);
