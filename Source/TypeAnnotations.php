<?php

class Calculator {
    public function add($left, $right) {
        return $left + $right;
    }
}

$calc = new Calculator();
echo $calc->add(1, 3).PHP_EOL;
echo $calc->add(1, "3").PHP_EOL;
echo $calc->add(1, "three").PHP_EOL;
