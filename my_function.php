<?php
// 「引数の値を2倍にする」関数
function numToDouble(int $i): int
{
    // 値を2倍にする
    $ret = $i * 2;

    // 戻り値
    return $ret;
}
$num = numToDouble(10);
echo "10 を2倍にしたら{$num}になった \n";

// 2つの引数を「加算する」関数
function numAdd(int $a, int $b): int
{
     $ret = $a+$b;

     return $ret;
}
$add=numAdd(5, 6);
echo "5と6を足したら{$add}となる \n";