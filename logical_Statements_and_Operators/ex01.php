<?php
// divide the year by 4;
//  if it has no remainder,
// check if it is divisible by 100;
// century years are only leap years if they are also divisible by 400
$year = 2000;
if ($year % 4 !== 0)
    echo "This year is not a leap year";
else if ($year % 100 == 0) {
    if ($year % 400 == 0)
        echo "This year is a leap year";
    else
        echo "This year is not a leap year";
} else
    echo "This year is a leap year";



