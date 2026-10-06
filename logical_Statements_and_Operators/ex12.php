<?php
$grades = [60,86,95,63,55,74,79,62,50];
$result = 0;
foreach ($grades as $grade) {
    $result += $grade;
}
$result /= count ($grades);
if ($result < 60)
    echo "F";
else if ($result < 70)
    echo "D";
else if ($result < 80)
    echo "C";
else if ($result < 90)
    echo "B";
else
    echo "A";