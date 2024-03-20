<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'What number is missing in the progression?';

function run()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $progression = generateProgression();
        $randomNumberQuestion = rand(0, 9);
        $correctAnswer = (string)$progression[$randomNumberQuestion];
        $progression[$randomNumberQuestion] = '..';
        $question = implode(' ', $progression);
        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, DESCRIPTION);
}

function generateProgression()
{
    $progression = [];
    $maxElementsCount = 10;
    $startProgression = rand(1, 50);
    $stepProgression = rand(1, 10);
    for ($x = $startProgression; count($progression) < $maxElementsCount; $x++) {
        $x += $stepProgression;
        $progression[] = $x;
    }
    return $progression;
}
