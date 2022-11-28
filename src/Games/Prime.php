<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\someGame;

function isPrime(string $playerName, callable $question, callable $correctAnswer) : void
{
    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    someGame($playerName, $condition, $question, $correctAnswer);
}
