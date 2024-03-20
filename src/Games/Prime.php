<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function run()
{
    $gameData = [];
    $correctAnswer = '';
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(2, 100);
        $correctAnswer = isPrime($randomNumber) ? 'yes' : 'no';
        $gameData[] = [$randomNumber, $correctAnswer];
    }
    runGame($gameData, DESCRIPTION);
}

function isPrime(int $num)
{
    for ($i = 2; $i < $num; $i += 1) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
