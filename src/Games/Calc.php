<?php

namespace Brain\Games\Calc;

use function Brain\Games\Engine\someGame;

function calculation(string $playerName, callable $question, callable $correctAnswer) : void
{
    $condition = 'What is the result of the expression?';
    someGame($playerName, $condition, $question, $correctAnswer);
}
