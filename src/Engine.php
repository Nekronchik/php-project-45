<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function run(array $gameData, string $task)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);
    foreach ($gameData as $key => $value) {
        line("Question: {$key}");
        $playerAnswer = prompt("Your answer");
        if ($playerAnswer !== $value) {
            line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$value}'.");
            line("Let's try again, {$name}!");
            return;
        } else {
            line("Correct!");
        }
    }
    line("Congratulations, {$name}!");
}
