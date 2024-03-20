<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';


function run()
{
    $gameData = [];
    $t = 0;
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber1 = rand(2, 5);
        $randomNumber2 = rand(2, 5);
        $question = "{$randomNumber1} {$randomNumber2}";
        $correctAnswer = findGcd($randomNumber1, $randomNumber2);
        $gameData[] = [$question, (string)$correctAnswer];
    }
    runGame($gameData, DESCRIPTION);
}

function findGcd(int $num1, int $num2)
{
    while ($num2 != 0) {
        $t = $num1 % $num2;
        $num1 = $num2;
        $num2 = $t;
    }
    return $num1;
}
