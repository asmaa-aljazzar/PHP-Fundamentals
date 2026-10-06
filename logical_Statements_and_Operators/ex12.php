<?php
$grades = [60,86,95,63,55,74,79,62,50];
$result = 0;
foreach ($grades as $grade) {
    $result += $grade;
}
$result /= count ($grades);
echo $result;