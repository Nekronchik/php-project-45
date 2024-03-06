<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\welcome;
use function BrainGames\Engine\startEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function launchProg()
{
    $maxElementsCount =  10;
    $name = welcome();
    line('What number is missing in the progression?');
    for ($i = 1; $i <= ROUNDS_COUNT; $i += 1) {
        $progression = [];
        $startProgression = random_int(1, 50);
        $stepProgression = random_int(1, 10);
        $randomNumberQuestion = random_int(0, 9);
        for ($x = $startProgression; count($progression) < $maxElementsCount; $x++) {
            $x += $stepProgression;
            $progression[] = $x;
        }
        $correctAnswer = $progression[$randomNumberQuestion];
        $progression[$randomNumberQuestion] = '..';
        $question = implode(' ', $progression);
        $engine = startEngine($question, $correctAnswer);
        if ($engine) {
            $result = "Congratulations, {$name}!";
        } else {
            $result = "Let's try again, {$name}!";
            break;
        }
    }
    line($result);
}
