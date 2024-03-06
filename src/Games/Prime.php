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
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(1, 100);
        if ($randomNumber % 2 === 0 || $randomNumber % 3 === 0 || $randomNumber % 5 === 0 || $randomNumber % 7 === 0) {
            $correctAnswer = 'no';
        } else {
            $correctAnswer = 'yes';
        }
        $question = "{$randomNumber}";
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
