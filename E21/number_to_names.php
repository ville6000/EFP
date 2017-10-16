<?php

echo 'Please enter the number of the month: ';
$number_of_the_month = fgets(STDIN);

switch ($number_of_the_month) {
    case 1: $month = 'January';
        break;
    case 2: $month = 'February';
        break; 
    case 3: $month = 'March';
        break; 
    case 4: $month = 'April';
        break; 
    case 5: $month = 'May';
        break; 
    case 6: $month = 'June';
        break; 
    case 7: $month = 'July';
        break; 
    case 8: $month = 'August';
        break; 
    case 9: $month = 'September';
        break; 
    case 10: $month = 'October';
        break; 
    case 11: $month = 'November';
        break; 
    case 12: $month = 'December';
        break; 
    default:
        $month = false;
        break;
}

echo ($month) ? "The name of the month is $month." : 'Invalid input value';

