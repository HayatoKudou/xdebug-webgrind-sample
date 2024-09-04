<?php

function sampleFunction1() {
    $sum = 0;
    for ($i = 0; $i < 100000; $i++) {
        $sum += $i;
    }
    return $sum;
}

function sampleFunction2() {
    $product = 1;
    for ($i = 1; $i <= 20; $i++) {  // 1000から20に減らす
        $product *= $i;
    }
    return $product;
}

echo "Function 1 Result: " . sampleFunction1() . PHP_EOL;
echo "Function 2 Result: " . sampleFunction2() . PHP_EOL;