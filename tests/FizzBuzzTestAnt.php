<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTestAnt extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnNumber()
    {
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $result = $fizzbuzz->modAndContainsFizzbuzz(1);
        //Assert
        $this->assertEquals(1, $result);

    }

    /**
     * @test
     */
    public function shouldReturnFizz()
    {
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $result = $fizzbuzz->modAndContainsFizzbuzz(3);
        //Assert
        $this->assertEquals("fizz", $result);
    }

    /**
     * @test
     */
    public function shouldReturnBuzz()
    {
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $result = $fizzbuzz->modAndContainsFizzbuzz(5);
        //Assert
        $this->assertEquals("buzz", $result);
    }

    /**
     * @test
     */
    public function shouldReturnFizzBuzz()
    {
        //Arrange
        $fizzbuzz = new FizzBuzz();
        //Act
        $result = $fizzbuzz->modAndContainsFizzbuzz(15);
        //Assert
        $this->assertEquals("fizzbuzz", $result);
    }

    //PRINCIPIOS FIRST pregunta del examen

    //En cada test solo probar una cosa

}
