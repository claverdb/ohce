<?php


namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    private string $name;

    function rotate(String $word): String
    {
        if($word === "Stop!")
            return "Adios " . $this->name . "!";
        elseif(strrev($word) == $word)
            return "¡Bonita palabra!";
        else
            return strrev($word);
    }
}