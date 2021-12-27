<?php

declare (strict_types=1);

namespace Hcg\RunTimer;

/**
 * 程序运行时间调试工具类
 * 主要用途是获取程序在指定代码片段说花费的时间
 * @example 请参考example方法
 *
 * @author hcg
 * @email 532508307@qq.com
 */
class RunTimer
{
    // 程序运行开始时间
    private $StartTime = 0;
    // 程序运行结束时间
    private $StopTime = 0;

    // 程序运行开始
    public function start()
    {
        $this->StartTime = microtime(true);
    }

    // 程序运行结束
    public function stop()
    {
        $this->StopTime = microtime(true);
    }

    // 程序运行花费的时间（单位：毫秒）
    public function spent(): string
    {
        return number_format(($this->StopTime - $this->StartTime) * 1000, 4);
    }

    // 打印获取到的程序运行时间差
    public function echo(){
        echo "程序运行时间为:" . $this->spent() . "毫秒\r\n";
    }

    // 本调试程序的一个常规使用示例
    public static function example()
    {
        // 实例化
        $timer = new RunTimer();
        $timer->start();

        #需要执行的代码，我们这里简单的睡眠2秒，代表程序执行花费了2秒
        sleep(2);

        $timer->stop();
        $timer->echo();
    }
}
