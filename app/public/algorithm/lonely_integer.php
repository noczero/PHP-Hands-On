<?php

/*
 * Given an array of integers, where all elements but one occur twice, find the unique element.
 * Example :
 * a = [1,2,3,4,2,1]
 * output -> 4
 * How :
 * using two iteration to compare each elements,
 * skip loop when meet own index,
 * skip loop when element is exist,
 * save the index and return the elements
 */
function lonelyInteger($a)
{
    $foundIndex = 0;
    for ($i = 0; $i < count($a); $i++) {
//        echo $a[$i] . "\n";
        $counter = 0;
        $unique = false;
        for ($j = 0; $j < count($a); $j++) {
            if ($i == $j) {
                $foundIndex = $i;
//                echo "Skipped same index\n";
                continue;
            } else if ($a[$i] == $a[$j]) {
//                echo "Skipped same value\n";
                continue;
            }

            $counter++;
//            echo "Counter:" . $counter . "\n";
            if ($counter == count($a) - 1) {
                $unique = true;
            }
        }

        if ($unique) {
            return $a[$foundIndex];
        }
    }

    return $a[$foundIndex];
}

echo lonelyinteger(array(1, 2, 3, 4, 3, 2, 1));

