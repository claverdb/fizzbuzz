<?php

namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\Factor;
use PHPUnit\Framework\TestCase;

class FactorTest extends TestCase
{
    /**
     * @var
     */
    private $factor;

    /**
     * @setUp
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->factor = new Factor();
    }

    /**
     * @test
     */
    public function when_2_given_factor_2(){

        $correct_answer = [2];

        $factors = $this->factor->factor_reduction(2);

        $this->assertEqualsCanonicalizing($correct_answer, $factors);
    }

    /**
     * @test
     */
    public function when_8_given_factor_2_2_2(){

        $correct_answer = [2,2,2];

        $factors = $this->factor->factor_reduction(8);

        $this->assertEqualsCanonicalizing($correct_answer, $factors);
    }

    /**
     * @test
     */
    public function when_15_given_factor_2_5(){

        $correct_answer = [3,5];

        $factors = $this->factor->factor_reduction(15);

        $this->assertEqualsCanonicalizing($correct_answer, $factors);
    }

    /**
     * @test
     */
    public function when_20_given_factor_2_2_5(){

        $correct_answer = [2,2,5];

        $factors = $this->factor->factor_reduction(20);

        $this->assertEqualsCanonicalizing($correct_answer, $factors);
    }
}
