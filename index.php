<?php

session_start();

function calculate()
{
    if (isset($_SESSION['number1'], $_SESSION['number2'], $_SESSION['operator'])) {
        $num1 = $_SESSION['number1'];
        $num2 = $_SESSION['number2'];
        $op = $_SESSION['operator'];

        $result = 0;

        if ($op == "+") $result = ($num1 + $num2);
        elseif ($op == "-") $result = ($num1 - $num2);
        elseif ($op == "*") $result = ($num1 * $num2);
        elseif ($op == "/") $result = $num2 != 0 ? ($num1 / $num2) : "Please enter valid numbers!";
        elseif ($op == "%") $result = $num2 != 0 ? ($num1 % $num2) : "Please enter valid numbers!";

        return $result;
    }
    return "";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['number1'] = $_POST['number1'];
    $_SESSION['number2'] = $_POST['number2'];
    $_SESSION['operator'] = $_POST['operator'];

    $_SESSION['result'] = calculate();

    header("Location: /");
    exit;
}

require "index.view.php";




