<?php

namespace App;


class FizzBuzz
{

    /**
     * Check if number is divisible by three,
     * in this case return true or false otherwise
     * @param int $number
     * @return bool
     */
    public function isFizz(int $number): bool
    {
        return $number % 3 == 0;
    }

    /**
     * Check if number is divisible by five,
     * in this case return true or false otherwise
     * @param int $number
     * @return bool
     */
    public function isBuzz(int $number): bool
    {
        return $number % 5 == 0;
    }

    /**
     * Check if number is divisible by fifteen,
     * in this case return true or false otherwise
     * @param int $number
     * @return bool
     */
    public function isFizzBuzz(int $number): bool
    {
        return $number % 15 == 0;
    }

    /**
     * Run FizzBuzz code
     * @param iterable $sequence
     * @return iterable
     */
    function runFizzBuzz(iterable $sequence): iterable
    {
        $result = [];
        foreach ($sequence as $value) {
            if ($this->isFizzBuzz($value)) {
                $result[] = 'FizzBuzz';
            } elseif ($this->isBuzz($value)) {
                $result[] = 'Buzz';
            } elseif ($this->isFizz($value)) {
                $result[] = 'Fizz';
            } else {
                $result[] = $value;
            }
        }
        return $result;
    }

}
