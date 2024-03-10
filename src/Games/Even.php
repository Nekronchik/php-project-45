<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runEven(): void
{
    $gameData = [];
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $randomNumber = random_int(1, 15);
        if ($randomNumber % 2 === 0) {
            $correctAnswer = 'yes';
        } else {
            $correctAnswer = 'no';
        }
        $gameData[] = ['question' => $randomNumber, 'correctAnswer' => $correctAnswer];
    }
    run($gameData, $task);
}
