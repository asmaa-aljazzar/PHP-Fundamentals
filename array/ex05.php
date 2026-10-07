<?php
$nums = [1, 2, 3, 4, 5, 6];
$location = 4;
$newItem = '$';

array_splice($nums, $location - 1, 0, $newItem);
print_r($nums);