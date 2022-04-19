<?php

function reverseString($string)
{
    $string = strrev($string);
    echo $string;
}

reverseString("Hello World");