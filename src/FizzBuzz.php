<?php


namespace App;



use LogicException;

class FizzBuzz
{
    /**
     *  Generator of sequence, like a range function.
     * @param int $start
     * @param int $end
     * @return iterable
     */
    public function generatorSequence(int $start, int $end) : iterable
    {
        /**End{@var $end} must be greater than zero as a consequence of these checks*/
        if( $start <= 0 ) {
            throw new LogicException("Start must be above zero");
        }

        if ( $start >= $end ) {
            throw new LogicException("Start must be less than End");
        }

        for( $i = $start; $i <= $end; $i++ ) {
            yield $i;
        }
    }

    /**
     * Run FizzBuzz code
     * @param int $start
     * @param int $end
     * @return iterable
     */
    function runFizzBuzz(int $start = 1, int $end = 100): iterable {
        $sequence = $this->generatorSequence($start, $end);
        $result = [];
        foreach ($sequence as $value) {
            if ($value % 15 == 0 ) {
                $result[]= 'FizzBuzz';
            } elseif ($value % 5 == 0 ) {
                $result[]= 'Buzz';
            } elseif ( $value % 3 == 0 ) {
                $result[]= 'Fizz';
            } else {
                $result[] = $value;
            }
        }
        return $result;
    }

}