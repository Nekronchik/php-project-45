<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

function runProg()
{
    $maxElementsCount = 10;
    $gameData = [];
    $task = 'What number is missing in the progression?';
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $progression = [];
        $startProgression = rand(1, 50);
        $stepProgression = rand(1, 10);
        $randomNumberQuestion = rand(0, 9);
        for ($x = $startProgression; count($progression) < $maxElementsCount; $x++) {
            $x += $stepProgression;
            $progression[] = $x;
        }
        $correctAnswer = (string)$progression[$randomNumberQuestion];
        $progression[$randomNumberQuestion] = '..';
        $question = implode(' ', $progression);
        $gameData[] = ['question' => $question, 'correctAnswer' => $correctAnswer];
    }
    run($gameData, $task);
}
