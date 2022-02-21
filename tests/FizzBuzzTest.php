<?php


namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function when_1_given_keeps_in_1(){
        $fizzbuzz = new FizzBuzz();

        $convertedValue = $fizzbuzz->convert(1);

        $this->assertEquals("1", $convertedValue);
    }

    /**
     * @test
     */
    public function when_3_given_converts_to_fizz(){
        $fizzbuzz = new FizzBuzz();

        $convertedValue = $fizzbuzz->convert(3);

        $this->assertEquals("fizz", $convertedValue);
    }

    /**
     * @test
     */
    public function when_5_given_converts_to_buzz(){
        $fizzbuzz = new FizzBuzz();

        $convertedValue = $fizzbuzz->convert(5);

        $this->assertEquals("buzz", $convertedValue);
    }

    /**
     * @test
     */
    public function when_15_given_converts_to_fizzbuzz(){
        $fizzbuzz = new FizzBuzz();

        $convertedValue = $fizzbuzz->convert(15);

        $this->assertEquals("fizzbuzz", $convertedValue);
    }

    /**
     * @test
     */
    public function when_contains_3_converts_to_fizz(){
        $fizzbuzz = new FizzBuzz();

        $convertedValue = $fizzbuzz->convert(31);

        $this->assertEquals("fizz", $convertedValue);
    }

    /**
     * @test
     */
    public function when_contains_5_converts_to_buzz(){
        $fizzbuzz = new FizzBuzz();

        $convertedValue = $fizzbuzz->convert(52);

        $this->assertEquals("buzz", $convertedValue);
    }
}