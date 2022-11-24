<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function greeting()
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, $name!");
    return $name;
};

function isEven($playerName)
{
    $num = [rand(0, 100), rand(0, 100), rand(0, 100)];
    $success = true;
    line('Answer "yes" if the number is even, otherwise answer "no".');

    foreach ($num as $item) {
        $answer = prompt('Question: ' . $item);
        line('Your answer: ' . $answer);
        if (!($item % 2) && $answer == 'yes') {
            line('Correct!');
        } elseif ($item % 2 && $answer == 'no') {
            line('Correct!');
        } else {
            $correctAnswer = ($answer == 'yes') ? 'no' : 'yes';
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\nLet's try again, {$playerName}!");
            $success = false;
            break;
        }
    }
    if ($success == true) {
        line("Congratulations, $playerName!");
    }
}
