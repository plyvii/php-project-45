<?php
namespace Brain\Games\Gcd;

use function Brain\Games\Engine\someGame;

function greatestCommonDivisor($playerName, $question, $correctAnswer)
{
$condition = 'Find the greatest common divisor of given numbers.';
someGame($playerName, $condition, $question, $correctAnswer);
}