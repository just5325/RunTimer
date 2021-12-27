# RunTimer
php 程序运行时间调试工具

### 安装
```
composer require hcg/run-timer
```

### 使用示例
````
require_once './vendor/autoload.php';

use Hcg\RunTimer\RunTimer as RunTimer;

// 实例化
$timer = new RunTimer();
$timer->start();

# 需要执行的代码，我们这里简单的睡眠2秒，代表程序执行花费了2秒
sleep(2);

$timer->stop();
$timer->echo();
````
示例程序输出：程序运行时间为:2,000.1540毫秒
