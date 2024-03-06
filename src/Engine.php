<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function welcome(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}

function startEngine(string $question,string $correctAnswer): bool
{   
    line("Question: {$question}");
    $playerAnswer = prompt("Your answer");
    if ($playerAnswer === $correctAnswer) {
        line("Correct!");
        return true;
    } else {
        line("'{$playerAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'");
        return false;
    }
}