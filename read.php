<html>
<head>
<meta charset="utf-8">
<title>集計結果</title>
</head>
<body>

<h1>集計結果</h1>

<!-- ここに記録していく -->
<table>
    <tr>
        <th>日時</th>
        <th>名前</th>
        <th>メールアドレス</th>
        <th>年齢</th>
        <th>性別</th>
        <th>クレーム内容</th>
    </tr>

    <?php
    //XSSを防ぐことができる
    include("funcs.php");
    
    $file = fopen('data/data.txt', 'r');// ファイルを開く

    // ファイル内容を1行ずつ読み込んで出力
    while ($str = fgets($file)) {
    
        nl2br($str); // nl2br() ... 改行文字を追加
        $a = explode(",", $str); //,で分割され配列の後ろに入れていく
        echo  "<tr><td class = 'date'>".h($a[0])."</td><td class = 'name'>".h($a[1])."</td><td class = 'mail'>".h($a[2])."</td><td class = 'age'>".h($a[3])."</td><td class = 'sex'>".h($a[4])."</td><td class = 'complain'>".h($a[5])."</td></tr>";
    }
    fclose($file); // ファイルを閉じる
    ?>
</table>


<ul>
<li><a href="input.php">入力へ戻る</a></li>
</ul>
</body>
</html>

<style>
    table{
        width: 100%;
        border: solid 1px black;
        border-collapse: collapse;
    }

    th{
        border: solid 1px black;
        border-collapse: collapse;
    }

    .date{
        width: 20%;
        border: solid 1px black;
        border-collapse: collapse;
    }
    .name{
        width: 20%;
        border: solid 1px black;
        border-collapse: collapse;
    }
    .mail{
        width: 20%;
        border: solid 1px black;
        border-collapse: collapse;
    }
    .age{
        width: 5%;
        border: solid 1px black;
        border-collapse: collapse;
    }
    .sex{
        width: 5%;
        border: solid 1px black;
        border-collapse: collapse;
    }
    .complain{
        width: 30%;
        border: solid 1px black;
        border-collapse: collapse;
    }

</style>