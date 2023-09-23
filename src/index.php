<?php

include_once "services/MessageDate.php";
include_once "services/DateMessages/WeekDays.php";
include_once "services/DateMessages/SpecialDays.php";

$week_days    = new \Services\DateMessages\WeekDays();
$special_days = new \Services\DateMessages\SpecialDays();

$messageDate = new \Services\MessageDate($week_days);
echo $messageDate->setMessage(date('w'));

$messageDate->setService($special_days);
echo $messageDate->setMessage(date('d_m'));