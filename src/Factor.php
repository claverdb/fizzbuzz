<?php


namespace Deg540\PHPTestingBoilerplate;

$kata = new Factor();
$kata->factor_reduction(15);

class Factor
{
    public function factor_reduction(int $numberToConvert): array
    {
        $until_number = 2;
        $factor_values = [];
        while($until_number <= $numberToConvert){
            if($numberToConvert % $until_number == 0) {
                echo $until_number.", ";
                $factor_values[] = $until_number;
                $numberToConvert = $numberToConvert / $until_number;
            } else {
                $until_number++;
            }
        };
        return $factor_values;
    }

}