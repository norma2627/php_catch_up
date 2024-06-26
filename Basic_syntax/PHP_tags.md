# PHP tags
PHP タグ

## PHP
ファイルを解析して開始タグと終了タグを探す。
開始タグと終了タグ: (<?php ?>)

タグが見つかると、コードの実行を開始したり終了したりする。
→PHPを他のあらゆる形式のドキュメント内に埋め込むことができる。
開始タグと終了タグで囲まれている箇所以外のすべての部分は、PHPパーサーに無視される。


### 例: PHPの開始タグと終了タグ
'XHTML,XMLドキュメントの中でPHPコードを扱いたい場合'
```lang:PHP
<?php echo ''; ?>
```

### 例2: 短い形式
```lang: PHP
<?= '' ?>
```
<?php echo '' ?>と同じ意味。


### PHPコードのみのファイル
ファイルがPHPコードのみを含む場合は、ファイルの最後の終了タグは省略するのがおすすめ。
終了タグの後に余分な空白や改行があると、よきせぬ挙動を引き起こす可能性があるから。
余分な空白や改行のせいでPHPが出力バファリングを開始し、その時点の内容を意図せず出力してしまうことになる。

終了タグを省く場合
```lang:PHP
<?php
echo "Hello";

// ... いろんなコード

echo "";

// 終了タグを書かずにスクリプトを終了する。
```