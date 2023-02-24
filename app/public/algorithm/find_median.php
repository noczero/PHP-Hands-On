<?php
function findMedian($arr){
    sort($arr);

    $middleIndex = count($arr) / 2;
    return $arr[$middleIndex];
}
