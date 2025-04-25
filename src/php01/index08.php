<?php
$people = [
  [
    "name" => "Taro",
    "age" => "25歳",
    "gender" => "men"
  ],
  [
    "name" => "Jiro",
    "age" => "20歳",
    "gender" => "men"
  ],
  [
    "name" => "Saburo",
    "age" => "16歳",
    "gender" => "wwomen"
  ]
];

foreach ($people as $person) {
    print $name . "(" . $age . $gender . ")" . '<br />';
  }