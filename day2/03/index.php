<?php
$sum = 10000;
$age = 16;
$year = 0;
const percent = 0.1;

for( ; $sum <= 1000000; $sum += $sum * percent ){
  $age++;
  $year++;
}
echo "Сумма в {$sum} наберется за {$year} лет, типу будет {$age}, лет"
?>
