<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runEven()
{
    $gameData = [];
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $randomNumber = rand(1, 15);
        if ($randomNumber % 2 == 0) {
            $gameData[$randomNumber] = 'yes';
        } else {
            $gameData[$randomNumber] = 'no';
        }
    }
    run($gameData, $task);
}
