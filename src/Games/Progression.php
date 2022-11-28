<?php

namespace Brain\Games\Progression;

use function Brain\Games\Engine\someGame;

function progression(string $playerName, callable $question, callable $correctAnswer) : void
{
    $condition = 'What number is missing in the progression?';
    someGame($playerName, $condition, $question, $correctAnswer);
}
