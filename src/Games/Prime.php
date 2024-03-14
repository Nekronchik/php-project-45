<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function runPrime()
{
    $gameData = [];
    $correctAnswer = '';
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(2, 100);
        $flag = isPrime($randomNumber);
        $correctAnswer = getAnswer($flag);
        $gameData[] = ['question' => $randomNumber, 'correctAnswer' => $correctAnswer];
    }
    run($gameData, DESCRIPTION);
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

function getAnswer(bool $flag)
{
    return ($flag) ? 'yes' : 'no';
}
