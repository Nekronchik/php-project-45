<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcome;
use function BrainGames\Engine\startEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function launchCalc()
{
    $operator1 = '+';
    $operator2 = '-';
    $operator3 = '*';
    $res = '';
    $result = 0;
    $name = welcome();
    line('What is the result of the expression?');
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber1 = rand(1, 15);
        $randomNumber2 = rand(1, 15);
        $randomOperator = rand(1, 3);
        if ($randomOperator === 1) {
            $res = $operator1;
            $result = $randomNumber1 + $randomNumber2;
        } elseif ($randomOperator === 2) {
            $res = $operator2;
            $result = $randomNumber1 - $randomNumber2;
        } elseif ($randomOperator === 3) {
            $res = $operator3;
            $result = $randomNumber1 * $randomNumber2;
        }
        $question = "{$randomNumber1} {$res} {$randomNumber2}"; 
        $correctAnswer = (string)$result;
        $engine = startEngine($question, $correctAnswer);
        if ($engine) {
            $result = "Congratulation, {$name}";
        } else {
            $result = "Let's try again, {$name}!";
            break;
        }
    } line($result);

}
