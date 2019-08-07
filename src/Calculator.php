<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 * Edit: hang
 * Date: 07/08/2019
 */

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';

class Calculator
{
    public function calculate($firstOperand, $secondOperator, $operator)
    {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperator;
            case SUBTRACTION:
                return $firstOperand - $secondOperator;
            case MULTIPLICATION:
                return $firstOperand * $secondOperator;
            case DIVISION:
                if ($secondOperator != 0) {
                    return $firstOperand / $secondOperator;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo("Unsupported operation");
        }
    }
}