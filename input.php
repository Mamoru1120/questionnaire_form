<html>
<head>
<meta charset="utf-8">
<title>クレーム入力フォーム</title>
</head>
<body>

<h1>もし不満がございましたらご記入いただけますと幸いです</h1>

<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	年齢: <input type="text" name="age">
	性別：<input type="text" name="sex">
	クレーム：<input type="text" name="complain">
	<input type="submit" value="送信">
</form>

<ul>
<li><a href="read.php">集計結果</a></li>
</ul>
</body>


</body>
</html>