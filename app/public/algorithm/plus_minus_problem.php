<?php

/*
 * Given an array of integers, calculate the ratios of its elements that are positive, negative, and zero.
 * Print the decimal value of each fraction on a new line with places after the decimal.
 *
 * Example :
 * Input = [1, 1, 1, 0, -1, -1]
 * Output = 0.400000 0.400000 0.200000
 */
function plusMinus($arr)
{
    $positiveNumCount = 0;
    $negativeNumCount = 0;
    $zeroNumCount = 0;
    $totalElements = count($arr);

    foreach ($arr as $item) {
        if ($item < 0) {
            $negativeNumCount++;
        } else if ($item > 0) {
            $positiveNumCount++;
        } else {
            $zeroNumCount++;
        }
    }

    $positiveRatio = number_format($positiveNumCount/$totalElements,6);
    $negativeRatio = number_format($negativeNumCount/$totalElements,6);
    $zeroRatio = number_format($zeroNumCount/$totalElements,6);

    $result_str = "{$positiveRatio} \n {$negativeRatio} \n {$zeroRatio}";
    echo $result_str;
}

$input = array(1, 1, 0, -1, -1);

plusMinus($input);

