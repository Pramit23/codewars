<?php
function is_solved(array $board): int {
    // TODO: Check if the board is solved!
    $d1=($board[0][0] == $board[1][1] && $board[1][1] == $board[2][2])? $board[0][0]: false;
    $d2=($board[0][2] == $board[1][1] && $board[1][1] == $board[2][0])? $board[0][2]: false;
    $h1=($board[0][0] == $board[0][1] && $board[0][1] == $board[0][2])? $board[0][0]: false;
    $h2=($board[1][0] == $board[1][1] && $board[1][1] == $board[1][2])? $board[1][0]: false;
    $h3=($board[2][0] == $board[2][1] && $board[2][1] == $board[2][2])? $board[2][0]: false;
    $v1=($board[0][0] == $board[1][0] && $board[1][0] == $board[2][0])? $board[0][0]: false;
    $v2=($board[0][1] == $board[1][1] && $board[1][1] == $board[2][1])? $board[0][1]: false;
    $v3=($board[0][2] == $board[1][2] && $board[1][2] == $board[2][2])? $board[0][0]: false;
    
    if(!$d1 && !$d2 && !$h1 && !$h2 && !$h3 && !$v1 && !$v2 && !$v3)
    {
      return (min(array_map('min', $board)) === 0) ? -1 : 0;
    }
    else
    {
      $res = max([$d1,$d2,$h1,$h2,$h3,$v1,$v2,$v3]);
      return $res;
    }
    
  }


echo is_solved([[0, 0, 1],[0, 1, 2],[2, 1, 0]]);
