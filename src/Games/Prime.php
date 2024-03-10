<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runPrime()
{
    $gameData = [];
    $task = "Answer \"yes\" if given number is prime. Otherwise answer \"no\".";
    $correctAnswer = '';
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(2, 100);
        $flag = isPrime($randomNumber);
        if ($flag == true) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $gameData[] = ['question' => $randomNumber, 'correctAnswer' => $correctAnswer];
    }
    run($gameData, $task);
}

function isPrime(int $number)
{
    for ($i = 2; $i < $number; $i += 1) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
