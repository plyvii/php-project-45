<?php

namespace Brain\Games\Gcd;

use function Brain\Games\Engine\someGame;

function greatestCommonDivisor(string $playerName, callable $question, callable $correctAnswer) : void
{
    $condition = 'Find the greatest common divisor of given numbers.';
    someGame($playerName, $condition, $question, $correctAnswer);
}
