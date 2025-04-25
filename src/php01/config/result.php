<?php
$name=htmlspecialchars($_POST["name"],ENT_QUOTES);
$syouhin=htmlspecialchars($_POST["syouhin"],ENT_QUOTES);
$count=htmlspecialchars($_POST["count"],ENT_QUOTES);

echo "私の名前は、" . $name . "<br/>" . "ご希望の商品は、" . $syouhin . "<br/>" . "注文数は、" . $count;
