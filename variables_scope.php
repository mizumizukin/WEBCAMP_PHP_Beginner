<?php

//変数への代入
$a = 10;
// 変数の使用：使える
echo "global:a is {$a} \n";

// 関数の宣言
function myFunc()
{
    // 変数への代入
    $b = 999;
     // 変数の使用：使える
    echo "in function:b is {$b} \n";
}
// 関数の呼び出し
myFunc();