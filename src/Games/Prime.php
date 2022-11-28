<?php

namespace Brain\Games\Prime;

use function Brain\Games\Engine\someGame;

function isPrime($playerName, $question, $correctAnswer) {
    $condition = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    someGame($playerName, $condition, $question, $correctAnswer);
}
