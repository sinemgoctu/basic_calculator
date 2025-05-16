<?php

function calculate()
{
    $result = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["number1"];
        $num2 = $_POST["number2"];
        $op = $_POST["operator"];
        if ($op == "/" && $num2 == 0) {
            return "Please enter valid numbers!";
        }
        if ($op == "%" && $num2 == 0) {
            return "Please enter valid numbers!";
        }
        if ($op == "+") $result = ($num1 + $num2);
        elseif ($op == "-") $result = ($num1 - $num2);
        elseif ($op == "*") $result = ($num1 * $num2);
        elseif ($op == "/") $result = ($num1 / $num2);

        elseif ($op == "%") $result = ($num1 % $num2);

        return "Result: " . $result;
    }
    return null;
}

require "index.view.php";



