<?php
echo "Please input your height in inches: ";
$height = (int)fgets(STDIN);

echo "Please input your weight in pounds: ";
$weight = (int)fgets(STDIN);

$bmi = calculateBMI($weight, $height);

echo "\nYour BMI is " . round($bmi, 1) . "\n";

if (isInNormalRange($bmi)) {    
    echo "You are within the ideal range. \n";
} else {
    if ($bmi < 18.5) {
        echo "You are underweight. ";
    } else {
        echo "You are overweight. ";
    }

    echo "You should see a doctor.";
}

function calculateBMI($weight, $height) {
    return ($weight / ($height * $height)) * 703;
}

function isInNormalRange($bmi) {
    return ($bmi > 18.5 && $bmi < 25);
}
