<?php

$array = ["Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35];

function sortArray($array)
{
    // Sorting array by key and print
    ksort($array);
    foreach ($array as $key => $value) {
        echo $key . " is " . $value . " years old" . "<br>";
    }
}
sortArray($array);