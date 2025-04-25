<?php
function text($score1, $score2, $score3)
{
  $value = $score1 + $score2 + $score3;
  return $value;
}

$total = text($score1, $score2, $score3);

if($total>210){
  echo "合計点は" . $total . "なので合格です";
}else{
  echo "合計点は" . $total . "なので不合格です";
}

echo text(80,80,80);