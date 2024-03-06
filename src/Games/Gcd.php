<?php

namespace BrainGames\Games\Gcd;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcome;
use function BrainGames\Engine\startEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function launchGcd()
{
    $t = 0;
    $result = 0;
    $playerAnswer = '';
    $name = welcome();
    line('Find the greatest common divisor of given numbers.');
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber1 = rand(1, 15);
        $randomNumber2 = rand(1, 15);
        $question = "{$randomNumber1} {$randomNumber2}";
        while ($randomNumber2 != 0) {
            $t = $randomNumber1 % $randomNumber2;
            $randomNumber1 = $randomNumber2;
            $randomNumber2 = $t;
        }
        $correctAnswer = (string)$randomNumber1;
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
