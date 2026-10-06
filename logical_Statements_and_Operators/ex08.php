<?php
$unit = 50;
$result = 0;
if ($unit <= 50) {
    $p1 = $unit;
    $result = $p1 * 2.50;
} else if ($unit <= 150) {
    $p1 = 50;
    $p2 = $unit - 50;
    $result = ($p1 * 2.50) + ($p2 * 5.0);
} else if ($unit <= 250) {
    $p1 = 50;
    $p2 = 100;
    $p3 = $unit - 150;
    $result = ($p1 * 2.50) + ($p2 * 5.0) + ($p3 * 6.20);
} else {
    $p1 = 50;
    $p2 = 100;
    $p3 = 100;
    $p4 = $unit - 250;
    $result = ($p1 * 2.50) + ($p2 * 5.0) + ($p3 * 6.20) + ($p4 * 7.50);
}

echo $result." JOD";