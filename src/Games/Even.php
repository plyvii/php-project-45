<?php

namespace Brain\Games\Even;

use function Brain\Games\Engine\someGame;

function isEven(string $playerName, callable $question, callable $correctAnswer): void
{
    $condition = 'Answer "yes" if the number is even, otherwise answer "no".';
    someGame($playerName, $condition, $question, $correctAnswer);
}
