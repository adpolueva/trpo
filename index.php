<?php

use polueva\MyLog;

use polueva\QuEquation;

include "core/EquationInterface.php";
include "core/LogAbstract.php";
include "core/LogInterface.php";
include "polueva/MyLog.php";
include "polueva/Equation.php";
include "polueva/QuEquation.php";



$a = MyLog::Instance();
$b = MyLog::Instance();

$a->log('1');
$a->log('2');
$a->log('3');
$a->log('4');
$b->write();

?>