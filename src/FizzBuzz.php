<?php

namespace Deg540\PHPTestingBoilerplate;

//Comand shift T para pasar de test a normal
class FizzBuzz
{

    //fizzbuzz function
    public function convert(int $numberToConvert): string
    {
        if (($numberToConvert % 3 == 0 and $numberToConvert % 5 == 0) || (str_contains($numberToConvert, '5') && str_contains($numberToConvert, '3'))){

            return "fizzbuzz";
        } else if ($numberToConvert % 3 == 0 || str_contains($numberToConvert, '3')){

            return "fizz";
        } else if ($numberToConvert % 5 == 0 || str_contains($numberToConvert, '5')){

            return  "buzz";
        }
        return $numberToConvert;
    }
    //Se podría poner cada if en diferentes funciones por ej is_buzz()
}