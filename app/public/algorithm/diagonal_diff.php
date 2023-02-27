<?php

/*
 *Given a square matrix, calculate the absolute difference between the sums of its diagonals.
 * array(1,2,3),
    array(4,5,6),
    array(9,8,9),
Output :
abs | (1 + 5 + 9) - (3 + 5 + 9) | -> 2;
 */
function diagonalDiff($a)
{
//    print_r($a);
//    echo count($a);
    $leftSideArr = array();
    $rightSideArr = array();
    $rightIdx = count($a) - 1;
    for ($i = 0; $i < count($a); $i++) {
        $leftSideArr[] = $a[$i][$i];
        $rightSideArr[] = $a[$i][$rightIdx];
        $rightIdx--;
    }

//    print_r($leftSideArr);
//    print_r($rightSideArr);
    //    echo "<br>";
    return abs(array_sum($leftSideArr) - array_sum($rightSideArr));
}

$input = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(9, 8, 9),
);

echo "Result : " . diagonalDiff($input);