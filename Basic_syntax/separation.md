# Instruction separation
命令の分離

## ステートメントの区切り
ステートメントの区切り方: セミコロンが必要。

### PHPの終了タグ
自動的にセミコロンが含まれていると認識される。
→PHPコードの最終行には、セミコロンを記述する必要がない。

### 例1
改行を囲んだ終了タグを表示させる例
```lang:php
<?php echo "Hello"; ?>
<?= "Hello2" ?>
```
上記の出力
```
Hello
Hello2
```

### 例2
```lang: php
<?php
    echo "Test";
?>

<?php echo "Test" ?>

<?php echo "Test";
```
※ファイル終端におけるPHPブロックの終了タグは任意。
include,requireを利用する際は、終了タグを省略するのが無難。
