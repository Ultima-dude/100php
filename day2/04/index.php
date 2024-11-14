<?php
const percent = 0.03;
const comission = 1000;
$pay = 5000;
$totalMoney = 0;
$month = 0;

for($creditSum = 40000; $creditSum > 0; $creditSum += $creditSum * percent + comission - $pay){
  if($creditSum + $creditSum * percent + comission < $pay) {
    $pay = $creditSum + $creditSum * percent + comission;
  }
  $totalMoney += $pay;
  $month++;
}

echo "Кредит был выплачен за {$month} месяцев, всего было уплачено {$totalMoney} денег"
?>
