<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\someGame;

function isEven($playerName, $question, $correctAnswer)
{
    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    someGame($playerName, $condition, $question, $correctAnswer);
}
