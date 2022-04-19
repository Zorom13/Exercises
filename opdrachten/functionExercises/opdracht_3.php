<?php

function lowercaseChecker($string)
{
    if (strtolower($string) == $string) {
        echo $string . " is lowercase";
    } else {
        echo $string . " is not lowercase";;
    }
}
lowercaseChecker("hello world");
echo "<br>";
lowercaseChecker("Hello World");
