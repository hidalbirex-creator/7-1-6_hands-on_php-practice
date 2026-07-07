<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品価格計算</title>
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
        <h1>年齢割引</h1>

        <?php
        // 変数の定義
        $age = 10;
        $is_member = true;
        $is_student = false;

        // 計算処理
        if ($age <= 18 && $is_member) {
            echo "割引が適用されます<br>";
        }

        if ($age >= 65 || $is_student) {
            echo "シニア・学生割引が適用されます<br>";
        }

        ?>
    </div>
</body>

</html>