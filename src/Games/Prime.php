<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcome;
use function BrainGames\Engine\startEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function launchPrime()
{
    $correctAnswer = '';
    $name = welcome();
    $result = '';
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(2, 100);
        $question = "{$randomNumber}";
        $correctAnswer = isPrime($randomNumber);
        $engine = startEngine($question, $correctAnswer);
        if ($engine) {
            $result = "Congratulations, {$name}!";
        } else {
            $result = "Let's try again, {$name}!";
            break;
        }
    }
    line($result);
}

function isPrime(int $number): string
{
    for ($index = 2; $index < $number; $index++) {
        if ($number % $index == 0) {
            return $correctAnswer = 'no';
        }
    }
    return $correctAnswer = 'yes';
}
