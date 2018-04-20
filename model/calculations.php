<?php

/**
 * 
 * @param float $valueToCheck
 * @param integer $minValue
 * @param integer $maxValue
 * @return array
 */
function checkValueFromPOST($valueToCheck, $minValue, $maxValue) {
    $valueText = '';
    $canCalculate = false;
    
    if (empty($valueToCheck)) {           // Empty?
        $valueText = "Brak pierwszej wartości";
    } elseif (is_nan($valueToCheck)) {    // Maybe is not a number?
        $valueText = "Wartość w pierwszym powinna być liczbą!";
    } elseif ($valueToCheck < $minValue || $valueToCheck > $maxValue) {     // In the range?
        $valueText = "Wartość poza zakresem danych dopuszczalnych od " . $minValue 
                        . " do " . $maxValue . ".";
    } else {        // Can be calculate
        $canCalculate = true;
    }
    
    return [
        $canCalculate,
        $valueText
    ];
}

// First I would like to simple validate both values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstValue = $_POST["firstValue"];
    $secondValue = $_POST["secondValue"];
    
    // First validation of both values
    list($canCalculateFirst, $firstValueText) = checkValueFromPOST($firstValue, $minValue, $maxValue);
    list($canCalculateSecond, $secondValueText) = checkValueFromPOST($firstValue, $minValue, $maxValue);

    // Both are OK? Lets calculate!
    if ($canCalculateFirst && $canCalculateSecond) {
        $finalResultPLN = ($firstValue * 100) + ($secondValue * 100);
    } else {
        
    }
}

