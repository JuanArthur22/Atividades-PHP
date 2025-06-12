<?php
  $player = 100;
  $winner = 20;
  $loser = 15;

  $win = $player + $winner;
  $lose = $player - $loser;
  echo"O jogador ganhou, seus pontos foram: " . $win;
  echo '<br>';
  echo "O jogador perdeu, seus pontos foram: ". $lose;
?>