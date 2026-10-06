<?php
$numbers = [1, 5, 9];
$max = $numbers[0];

foreach ($numbers as $number) {
    if ($number > $max)
        $max = $number;
}

echo $max;
?>