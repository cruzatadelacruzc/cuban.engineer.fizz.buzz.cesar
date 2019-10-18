<?php

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    protected $sequence_ok;
    protected $sequence_bad;
    protected $fizzbuzz;
    protected $default_sequence;

    protected function setUp(): void
    {
        $this->default_sequence = $this->generatorSequence(1,15);
        $this->fizzbuzz = new FizzBuzz();
        // sequence with right values
        $this->sequence_ok = array(0 => 1,1 => 2,2 => 'Fizz',3 => 4,4 => 'Buzz',5 => 'Fizz',6 => 7,7 => 8,8 => 'Fizz',
            9 => 'Buzz',10 => 11,11 => 'Fizz',12 => 13,13 => 14,14 => 'FizzBuzz');
        // sequence with wrong value
        $this->sequence_bad = array(0 => 1,1 => 2,2 => 'Fizz',3 => 'Fizz',4 => 'Buzz',5 => 'FizzBuzz',6 => 7,7 => 'Buzz',
            8 => 'Fizz',9 => 'Buzz',10 => 11,11 => 'Fizz',12 => 'Fizz',13 => 14,14 => 'Fizz');
    }

    /**
     * Generator of sequence, like a range function.
     * @param int $start
     * @param int $end
     * @return iterable
     */
    protected function generatorSequence(int $start,int $end): iterable
    {
        /**End{@var $end } must be greater than zero as a consequence of these checks*/
        if ($start <= 0) {
            throw new LogicException("Start must be above zero");
        }
        if ($start >= $end) {
            throw new LogicException("Start must be less than End");
        }
        for ($i = $start; $i <= $end; $i++) {
            yield $i;
        }
    }

    /**
     *  Checking that expected response is true
     */
    public function testNumberIsFizz()
    {
        $number = 3 * rand();
        $this->assertTrue($this->fizzbuzz->isFizz($number));
    }

    /**
     *  Checking that expected response is true
     */
    public function testNumberIsBuzz()
    {
        $number = 5 * rand();
        $this->assertTrue($this->fizzbuzz->isBuzz($number));
    }

    /**
     *  Checking that expected response is true
     */
    public function testNumberIsFizzBuzz()
    {
        $number = 15 * rand();
        $this->assertTrue($this->fizzbuzz->isFizzBuzz($number));
    }

    /**
     *  Checking that expected response is false
     */
    public function testNumberIsNotFizzBuzz()
    {
        $number = 15 * rand() + 1;
        $this->assertFalse($this->fizzbuzz->isFizzBuzz($number));
    }

    /**
     *  Checking that expected response is false
     */
    public function testNumberIsNotFizz()
    {
        $number = 3 * rand() + 1;
        $this->assertFalse($this->fizzbuzz->isFizzBuzz($number));
    }

    /**
     *  Checking that expected response is false
     */
    public function testNumberIsNotBuzz()
    {
        $number = 5 * rand() + 1;
        $this->assertFalse($this->fizzbuzz->isFizzBuzz($number));
    }

    /**
     * Checking that expected sequence matches the current sequence
     */
    public function testArrayOfIsMatching()
    {
        $this->assertEquals($this->sequence_ok,$this->fizzbuzz->runFizzBuzz($this->default_sequence));
    }

    /**
     * Checking that expected sequence not matches the current sequence
     */
    public function testArrayOfIsNotMatching()
    {
        $this->assertNotEquals($this->sequence_bad,$this->fizzbuzz->runFizzBuzz($this->default_sequence));
    }

}
