<?php

namespace Brain\Games\Engine;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    return $name;
};

function someGame($playerName, $condition, $question, $correctAnswer)
{
    $correctAnswersCount = 3;
    $success = true;
    $playersCorrectAnswersCount = 0;
    line($condition);

    while ($playersCorrectAnswersCount < $correctAnswersCount) {
        $thisQuestion = $question();
        $answer = prompt('Question: ' . $thisQuestion);
        line('Your answer: ' . $answer);
        $thisCorrectAnswer = $correctAnswer($thisQuestion);
        if ($answer === $thisCorrectAnswer) {
            line('Correct!');
            $playersCorrectAnswersCount++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$thisCorrectAnswer}'.\nLet's try again, {$playerName}!");
            $success = false;
            break;
        }
    }
    if ($success == true) {
        line("Congratulations, $playerName!");
    }
}