<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcome;
use function BrainGames\Engine\startEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function launchEven()
{
    $result = '';
    $name = welcome();
    line("Answer 'yes' if the number is even, otherwise answer 'no'.");
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(1, 15);
        $question = (string)$randomNumber;
        $correctAnswer = getEvenResult($randomNumber);
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

function getEvenResult($randomNumber)
{
    if ($randomNumber % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}
