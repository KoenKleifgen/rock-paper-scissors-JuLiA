<?php

$choices = array(
  // choice => beats
  'paper' => 'rock',
  'rock' => 'scissors',
  'scissors' => 'paper'
);

// play until someome wins
while ( true ) {
  // calculate the computer move first, no cheating
  $computer_move = $choices[array_rand($choices)];

  // get player move, must be valid
  do {
    echo("Rock, Paper, or Scissors? ");

    $human_move = strtolower(trim(fgets( STDIN )));
  } while ( !in_array($human_move, $choices) );

  // calculate winner
  if ( $human_move == $computer_move ) {
    echo("Tie!\n");
  } else if ( $choices[$human_move] == $computer_move ) {
    echo("Human Wins!\n");
    break;
  } else if ( $choices[$computer_move] == $human_move ) {
    echo("Computer Wins!\n");
    break;
  }
}
