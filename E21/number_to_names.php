<?php

echo 'Please enter the number of the month: ';
$number_of_the_month = (int) fgets(STDIN);

$months = [
    1 => 'January',
    2 => 'February',
    3 => 'March',
    4 => 'April',
    5 => 'May',
    6 => 'June',
    7 => 'July',
    8 => 'August',
    9 => 'September',
    10 => 'October',
    11 => 'November',
    12 => 'December',
];

if (isset($months[$number_of_the_month])) {
    $month_name = $months[$number_of_the_month];
} else {
    $month_name = false;
}

echo ($month_name) ? "The name of the month is $month_name." : 'Invalid input value';

