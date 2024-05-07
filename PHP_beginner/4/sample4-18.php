<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>簡単なテーブルのサンプル</title>
</head>
<body>
    <h1>簡単なテーブルのサンプル</h1>

    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>名前</th><th>性別</th><th>年齢</th><th>住所</th>
        </tr>
        <?php
            $member = [
                ["", "", "", ""],
                ["", "", "", ""],
                ["", "", "", ""]
            ];
            foreach ($member as $v){
                echo <<<LOOP
                <tr>
                </tr>
                Loop;
            }
        ?>
    </table>
</body>
</html>