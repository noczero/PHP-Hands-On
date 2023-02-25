<?php



/*
 * Complete the 'maximumProfit' function below.
 *
 * The function is expected to return a LONG_INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY inventory
 *  2. LONG_INTEGER order
 */

function maximumProfit($inventory, $order) {
    print_r($inventory);
    echo $order;

    $profit = 0;
    while ($order > 0) {
        echo "Order ". $order . "\n";
        // find the largest inventory item
        $maxIdx = 0;
        for ($i = 1; $i < count($inventory); $i++) {
            echo $inventory[$i],"\n";
            if ($inventory[$i] > $inventory[$maxIdx]) {
                $maxIdx = $i;
            }
        }
        //echo $maxIdx;

        // sell the largest item, sum it to profit.
        $profit += $inventory[$maxIdx];
        //echo $profix;

        // reduce the inventory
        $inventory[$maxIdx]--;
        //echo $inventory;

        // if we've sold all the items, stopped
        $order--;
        if ($order == 0) {
            break;
        }

    }

    return $profit;
}

echo "Result : ". maximumProfit(array(1,5),6) ."\n";
