<?php
namespace Brain\Games\Progression;

use function Brain\Games\Engine\someGame;

function progression($playerName, $question, $correctAnswer)
{
$condition = 'What number is missing in the progression?';
someGame($playerName, $condition, $question, $correctAnswer);
}