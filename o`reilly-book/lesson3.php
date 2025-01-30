<?php

echo date("1");

// phpinfo();
echo strrev(' .dlrow olleH'); // переворот текста
echo str_repeat('Hip', 2); // повторение строки
echo strtoupper('hoorey!'); // верхний регистр

$lowered = strtolower(string: 'приВет кАк дЕлА!!!');
echo $lowered;

$ucfixed = ucfirst('hello world !!!');
echo $ucfixed;

echo fix_names('William','henry','gateS');

function fix_names($n1,$n2,$n3) {
  $n1 = ucfirst(strtolower($n1));
  $n2 = ucfirst(strtolower($n2));
  $n3 = ucfirst(strtolower($n3));
  return "$n1 $n2 $n3";
}

//include './libraly.php';

require_once './libraly.php';
