<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runGcd()
{
    $gameData = [];
    $t = 0;
    $task = 'Find the greatest common divisor of given numbers.';
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber1 = rand(1, 15);
        $randomNumber2 = rand(1, 15);
        $question = "{$randomNumber1} {$randomNumber2}";
        while ($randomNumber2 != 0) {
            $t = $randomNumber1 % $randomNumber2;
            $randomNumber1 = $randomNumber2;
            $randomNumber2 = $t;
        }
        $gameData[$question] = (string)$randomNumber1;
    }
    run($gameData, $task);
}
