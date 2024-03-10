<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runCalc()
{
    $task = 'What is the result of the expression?';
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $randomNumber1 = rand(1, 15);
        $randomNumber2 = rand(1, 15);
        switch (mt_rand(1, 3)) {
            case 1:
                $gameData["$randomNumber1 - $randomNumber2"] = $randomNumber1 - $randomNumber2;
            break;
            case 2:
                $gameData["$randomNumber1 + $randomNumber2"] = $randomNumber1 + $randomNumber2;
            break;
            case 3:
                $gameData["$randomNumber1 + $randomNumber2"] = $randomNumber1 + $randomNumber2;
            break;
        }
    }
    run($gameData, $task);
}
