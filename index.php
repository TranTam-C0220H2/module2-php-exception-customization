<?php
class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "Can't divide by zero!";
    }
}
    function divide($numerator, $denominator) {
        if ($denominator === 0) {
            throw new DivideByZeroException();
        }
        return $numerator / $denominator;
    }

try {

    echo divide(4,5).'<br>';
    echo divide(4,0);
} catch (DivideByZeroException $exception) {
    echo 'Error line'.$exception->getLine().',file: '.$exception->getFile().': '.$exception;
}