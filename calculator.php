<?php
    $firstNumber = $_GET["value1"];
    $secondNumber = $_GET["value2"];
    if($secondNumber == 0) {
        echo "<h1>You have entered the second value as 0.</h1><p>Please enter a different value</p>";
    } else {
        $additionResult = $firstNumber + $secondNumber;
        $deductionResult = $firstNumber - $secondNumber;
        $multiplicationResult = $firstNumber * $secondNumber;
        $divisionResult = $firstNumber / $secondNumber;
        echo "<h1>Results</h1>
              <p>Your first input: <strong>$firstNumber</strong></p>
              <p>Your second input: <strong>$secondNumber</strong></p>
              <p>Addition result: <strong>$additionResult</strong></p>
              <p>Multiplication result: <strong>$multiplicationResult</strong></p>
              <p>Division result: <strong>$divisionResult</strong></p>
        ";
    }
?>