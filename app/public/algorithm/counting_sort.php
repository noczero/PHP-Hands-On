<?php

function countingSort($arr)
{
    // make an array of 0 until 100.
    $frequencyArray = array_fill(0, 100, 0);
//    print_r($frequencyArray);

    for ($i = 0; $i < count($arr); $i++) {
        $frequencyArray[$arr[$i]] += 1;
    }

//    echo "<br>";
    return $frequencyArray;
}

print_r(countingSort(array(1, 2, 2, 3, 4)));