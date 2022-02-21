<?php


namespace Deg540\PHPTestingBoilerplate;

$kata = new Kata();
$kata->kata_list(8);

class Kata
{
    public function kata_reduction(int $numberToConvert, int $until_number): int
    {
        while($until_number == 0 || $numberToConvert % $until_number != 0 ){
            $until_number--;
        };
        echo $until_number;
        $this->kata_reduction($numberToConvert / $until_number, $until_number - 1);
        return $until_number;
    }

    public function kata_list(int $numberToConvert)
    {
        $until_number = $numberToConvert - 1;
        $this->kata_reduction($numberToConvert, $until_number);
        return $until_number;
    }

}