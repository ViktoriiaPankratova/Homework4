<?php
$string= "Для виведення кольору оберіть число!\n";
echo $string;
$value=(int)fgets(STDIN);
$result= match ($value) {
    1 => 'green' . PHP_EOL,
    2=> 'red' . PHP_EOL,
    3=> 'blue' . PHP_EOL,
    4=> 'brown'.PHP_EOL,
    5=> 'violet'.PHP_EOL,
    6=> 'black'.PHP_EOL,
    default=>'white'.PHP_EOL,
};
echo $result;



