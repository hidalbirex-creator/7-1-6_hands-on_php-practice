<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>スコアボード</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .result {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .line {
            margin: 10px 0;
            font-size: 18px;
            color: #555;
        }

        .total {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid #0066cc;
            font-size: 20px;
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>

<body>
    <div class="result">
        <h1>スコアボード</h1>

        <?php
        $score = 100;
        echo "初期スコア: {$score}点<br>";

        $score += 50;  // ボーナスステージクリア
        echo "ボーナス後: {$score}点<br>";

        $score -= 30;  // ダメージ
        echo "ダメージ後: {$score}点<br>";

        $score *= 2;   // 2倍アイテム
        echo "最終スコア: {$score}点<br>";

        ?>
    </div>
</body>

</html>