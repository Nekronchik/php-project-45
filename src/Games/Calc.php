<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What is the result of the expression?';

function run()
{
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $operators = ['+', '-', '*'];
        $randomNumber1 = rand(1, 15);
        $randomNumber2 = rand(1, 15);
        $randomOperator = $operators[array_rand($operators, 1)];
        $question = "{$randomNumber1} {$randomOperator} {$randomNumber2}";
        $correctAnswer = calculate($randomNumber1, $randomNumber2, $randomOperator);
        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, DESCRIPTION);
}

function calculate(int $num1, int $num2, string $operator)
{
    switch ($operator) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        default:
            throw new Exception("Incorrect sign: '{$operator}'");
    }
}
