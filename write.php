<?php

$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$complain = $_POST["complain"];

//日本のタイムゾーンに設定
date_default_timezone_set('Asia/Tokyo'); 
//作成日時,名前,メールアドレス
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$age.",".$sex.",".$complain;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>回答完了</title>
</head>
<body>

<h1>回答ありがとうございます。</h1>

<ul>
<li><a href="read.php">集計結果</a></li>
<li><a href="input.php">入力へ戻る</a></li>
</ul>
</body>
</html>