<?php
//文字作成
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$long= $_POST["long"];
$weight= $_POST["weight"];
$footsize= $_POST["footsize"];
$str=  $name.",".$mail.",".$age.",".$long.",".$weight.",".$footsize;

//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");// \n改行コード
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>アンケートご回答ありがとうございました</h1>
<h2><a href="read.php">アンケート結果を確認しましょう！</h2>

<ul>
<li><a href="post.php">アンケート画面に戻る</a></li>
</ul>
</body>
</html>

