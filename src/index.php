<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>はじめてのPHP</title>
</head>
<body>
    <h1>PHPの世界へようこそ!</h1>
    <p>PHPを使って、動的なコンテンツを表示してみましょう。</p>
    <p>1 + 1 は、<?php echo 1 + 1; ?> です。</p>
    <p>現在の日時は、<?php echo date("Y年m月d日 H時i分s秒"); ?> です。</p>
</body>
</html>

<?php echo "Hello, PHP!";

echo '<P>HTMLタグも、そのまま出力できます。</p>';

echo 123;
echo 10 + 5;

echo "最初の文";
echo "次の文";

$today = "Monday";
echo $today;

$fruits = ['りんご', 'バナナ', 'みかん'];
echo $fruits[0];
echo $fruits[1];
echo $fruits[2];
