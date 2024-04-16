# Introduction
はじめに

## PHP
動的に片付けを行う言語。
実行時に型を決定する。
→デフォルトで変数の型を指定する必要がない。
※型宣言を使用すると、一部い静的に型を指定できる。

### 型
行える操作を制限する。
式や変数に対して、型がサポートしていない操作を行うとPHPは操作をサポートする型に変換しようとする。
※値が使われる文脈によって異なる。


式の型と値を知りたいとき:
val_dump()を使用する。

式の型を知りたい場合:
get_debug_type()を使用する。

式がある型であるかどうかを知りたいとき:
is_type関数を使用する。

```lang: php
<?php
$a_bool = true;
$a_str = "foo";
$a_str2 = "foo2";
$am_int = 12;

echo get_debug_type($a_bool), "\n";
echo get_debug_type($a_str), "\n";

// 数値であれば4を足す
if (is_int($am_int)) {
    $am_int += 4;
}
var_dump($am_int);

// $a_boolが文字列であれば、それをprintする
if (is_string(4a_bool)) {
    echo "String: $a_bool";
}

?>
```

出力
```
bool
string
int(16)
```