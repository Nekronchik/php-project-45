<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runCalc()
{
    $task = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $operators = ['+', '-', '*'];
        $randomNumber1 = rand(1, 15);
        $randomNumber2 = rand(1, 15);
        $randomOperator = $operators[array_rand($operators, 1)];
        $question = "{$randomNumber1} {$randomOperator} {$randomNumber2}";
        $correctAnswer = calculate($randomNumber1, $randomNumber2, $randomOperator);
        $gameData[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    run($gameData, $task);
}

function calculate($randomNumber1, $randomNumber2, $randomOperator)
{
    switch ($randomOperator) {
        case "+":
            return $randomNumber1 + $randomNumber2;
        case "-":
            return $randomNumber1 - $randomNumber2;
        case "*":
            return $randomNumber1 * $randomNumber2;
    }
}