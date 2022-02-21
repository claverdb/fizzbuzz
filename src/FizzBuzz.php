<?php


namespace Deg540\PHPTestingBoilerplate;

//Comand shift T para pasar de test a normal
class FizzBuzz
{
    /*
     * Código antes de corrección
    function modFizzbuzz (int $number1): String{
        if ($number1 % 3 == 0 and $number1 % 5 == 0){
            return "fizzbuzz";
        } else if ($number1 % 3 == 0){
            return "fizz";
        } else if ($number1 % 5 == 0){
            return  "buzz";
        }
        return $number1;
    }

    function modAndContainsFizzbuzz (int $number1): String{
        if (($number1 % 3 == 0 and $number1 % 5 == 0) || (str_contains($number1, '5') && str_contains($number1, '3'))){
            return "fizzbuzz";
        } else if ($number1 % 3 == 0 || str_contains($number1, '3')){
            return "fizz";
        } else if ($number1 % 5 == 0 || str_contains($number1, '5')){
            return  "buzz";
        }
        return $number1;
    }
    */

    //Class code
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
}