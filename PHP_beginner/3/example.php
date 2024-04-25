<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>文字列変数へのデータの追加</h1>
    <p>
        <?php
            // $strに初期値を代入
            $str = "Hello";
            // $strにWORLDを追加
            $str = $str . "World";
            // 結果を表示
            echo $str;
        ?>
    </p>
</body>
</html>