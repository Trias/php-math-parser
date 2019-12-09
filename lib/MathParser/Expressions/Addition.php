<?php

namespace MathParser\Expressions;

use MathParser\Stack;

class Addition extends Operator
{
    protected $precedence = 4;

    public function operate(array &$stack)
    {
        $left = array_pop($stack)->operate($stack);
        $right = array_pop($stack)->operate($stack);
    
        if($left === null || $right === null){
            return null;
        }
        
        return $left + $right;
    }
}
