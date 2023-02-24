<?php

/*
 * Given a time in

-hour AM/PM format, convert it to military (24-hour) time.

Note: - 12:00:00AM on a 12-hour clock is 00:00:00 on a 24-hour clock.
- 12:00:00PM on a 12-hour clock is 12:00:00 on a 24-hour clock.

Example :
07:05:45PM  -> 19:05:45
12:01:00AM -> 00:01:00

How :
It can be solved by split the string by ":",
then get first element to be convert based on last elements condition PM or AM.
if PM then +12,
if AM then -12.
*/

function timeConversion($s){

    $timeSplit = explode(":", $s);

    $hoursInt = (int) $timeSplit[0];
    $pmOrAm = substr(end($timeSplit), -2);
    $seconds = substr(end($timeSplit), 0,2);

    if ($pmOrAm == "PM") {
        if($hoursInt == 12) {
            $hoursStr = $hoursInt;
        } else {
            $hoursStr = $hoursInt + 12;
        }
    }  else {
        if ($hoursInt == 12) {
            $hoursStr = abs($hoursInt - 12);
        } else {
            $hoursStr = $hoursInt;
        }

    }

    $hoursStr = $hoursStr < 10 ? '0'.$hoursStr : $hoursStr;

    return "{$hoursStr}:{$timeSplit[1]}:{$seconds}";
}

$input = "07:05:45PM";
$input = "12:01:00AM";
$input = "06:01:00AM";
$input = "04:59:59AM";
$input = "12:45:54PM";
echo timeConversion($input);