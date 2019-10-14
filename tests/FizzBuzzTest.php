<?php

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{

    protected $default_sequence;

    protected function setUp(): void
    {
        $this->default_sequence = [
            0 => 1,
            1 => 2,
            2 => 'Fizz',
            3 => 4,
            4 => 'Buzz',
            5 => 'Fizz',
            6 => 7,
            7 => 8,
            8 => 'Fizz',
            9 => 'Buzz',
            10 => 11,
            11 => 'Fizz',
            12 => 13,
            13 => 14,
            14 => 'FizzBuzz',
            15 => 16,
            16 => 17,
            17 => 'Fizz',
            18 => 19,
            19 => 'Buzz',
            20 => 'Fizz',
            21 => 22,
            22 => 23,
            23 => 'Fizz',
            24 => 'Buzz',
            25 => 26,
            26 => 'Fizz',
            27 => 28,
            28 => 29,
            29 => 'FizzBuzz'
        ];
    }




    /**
     * Checking that expected sequence matches the current sequence
     */
    public function testArrayOfIsMatching()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals($this->default_sequence, $fizzbuzz->runFizzBuzz(1,30));
    }

    /**
     * Checking that expected sequence not matches the current sequence
     */
    public function testArrayOfIsNotMatching()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertNotEquals($this->default_sequence, $fizzbuzz->runFizzBuzz(1,15));
    }

}