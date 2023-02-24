<?php
/*
 * Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers.
 * Then print the respective minimum and maximum values as a single line of two space-separated long integers.
 * Example :
 * Input : [1,3,5,7,9]
 * Output : 16 24
 * How :
 * 16 is sum of 1 + 3 + 5 + 7
 * 24 is sum of 3 + 5 + 7 + 9
 * It can be solved using sorting descending and pick 0-4 elements to calculate max value
 * and soring ascending to find min val.
 */

function miniMaxSum($arr) {

    $ascArray = $arr;
    $descArray = $arr;

    sort($ascArray);
    rsort($descArray);

    $minValue = 0;
    for ($i=0; $i < count($ascArray)-1; $i++){
        $minValue += $ascArray[$i];
    }

    $maxValue = 0;
    for ($i=0; $i < count($descArray)-1; $i++){
        $maxValue += $descArray[$i];
    }

    echo $minValue . ' ' . $maxValue;
}

miniMaxSum(array(1,3,5,7,9));