# Booleans
論理型

bool型は、ふたつの値だけを持ち、真偽の値を表す。
trueかfalseのどちらかになる。


## Syntax
boolリテラルを指定するには、定数trueまたはflaseを指定する。
両方とも大文字小文字を区別しない。

```lang: php
<?php
$foo = True; // 値Trueを$fooに代入する
?>
```

bool型の値を返す演算子を使用してから、制御構造にその結果を渡す。

```lang: php

<?php
// == は、boolean型を返す演算子
if ($action == "show_version") {
    echo "バージョンは1.23です。";
}

// これは冗長
if ($show_separators == TRUE) {
    echo "<hr>\n";
}

// 上の例は次のように簡単に書くことができます。
if ($show_separators) {
    echo "<hr>\n";
}
?>

```


### booleanへの変換
boolに明示的に変換を行うには、キャスト(bool)を使用する。
論理型が必要な場合は、値は自動的にbool型に変換される、一般的にはキャストは不要。


### デフォルトの値
boolに変換する場合にfalseとみなされる値。

- boolean の false
- integer の 0 (ゼロ)
- float の 0.0 および -0.0 (ゼロ)
- 空の文字列 ""、 および文字列の "0"
- 要素の数がゼロである 配列
- unit 型 NULL (値がセットされていない変数を含む)
- bool 型へキャストするように動作がオーバーロードされた内部オブジェクト。 例: 属性がない空要素から作成された SimpleXML オブジェクト。
