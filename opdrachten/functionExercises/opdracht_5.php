<?php

function voteChecker($name, $age)
{
    if ($age < 18) {
        echo $name . " Je bent niet oud genoeg om te stemmen." . "<br>";
        echo " De stem grens is 18 jaar.";
    } else {
        echo $name . " Je kunt graag stemen.";
    }
}

voteChecker("Tomi", 18);