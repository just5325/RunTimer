<?php

require_once './vendor/autoload.php';

use Hcg\RunTimer\RunTimer as RunTimer;

// 实例化
$timer = new RunTimer();
$timer->start();

#需要执行的代码，我们这里简单的睡眠2秒，代表程序执行花费了2秒
sleep(2);

$timer->stop();
$timer->echo();
