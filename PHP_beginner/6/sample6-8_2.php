<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッションの活用2</title>
</head>
<body>
    <h1>セッション値の確認</h1>

    <?php
        session_start();
        echo "<p>セッションID:" . session_id() . "</p>";
        echo "<p>設定した値:{$_SESSION["data"]}</p>";
    ?>
    <a href="sample6-8_1.php">トップへ</a>
</body>
</html>