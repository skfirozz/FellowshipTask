<?php

class Calc
{
   public function sum($a, $b)
   {
       return $a + $b;
   }
}

function squareAdvice(AopJoinPoint $joinPoint)
{
   $value = $joinPoint->getReturnedValue();
   $joinPoint->setReturnedValue($value * $value);

   aop_add_after('Calc->sum()', 'squareAdvice');
}

$calc = new Calc();
echo $calc->sum(1, 2) . "\n";
?>
