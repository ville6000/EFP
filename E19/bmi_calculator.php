<?php

function run() {
    $bmi = getBMI();
    outputResults($bmi);
}

function getBMI() {
    $has_valid_values = false;
    $height = false;
    $weight = false;

    while ($has_valid_values === false) {
        if (!$height) {
            $height = askHeight();
        }

        if (!$weight) {
            $weight = askWeight();
        }

        if ($weight && $height) {
            $has_valid_values = true;
        }
    }

    return calculateBMI($weight, $height);
}

function outputResults($bmi) {
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
}

function askHeight() {
    echo "Please input your height in inches: ";
    return (int) fgets(STDIN);
}

function askWeight() {
    echo "Please input your weight in pounds: ";
    return (int) fgets(STDIN);
}

function calculateBMI($weight, $height) {
    return ($weight / ($height * $height)) * 703;
}

function isInNormalRange($bmi) {
    return ($bmi > 18.5 && $bmi < 25);
}

run();