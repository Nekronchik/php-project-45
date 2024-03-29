<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function run()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = random_int(1, 15);
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        $gameData[] = [$randomNumber, $correctAnswer];
    }
    runGame($gameData, DESCRIPTION);
}

function isEven(int $num)
{
    return $num % 2 === 0;
}
