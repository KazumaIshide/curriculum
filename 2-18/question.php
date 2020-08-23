<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartstyle2.css">
    <title>question</title>
</head>
<body>
<?php
    //POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
//② ①で作成した、配列から正解の選択肢の変数を作成してください
?>

<br>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->

<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<input type="radio" name="portnum" value="80">80
<input type="radio" name="portnum" value="22">22
<input type="radio" name="portnum" value="20">20
<input type="radio" name="portnum" value="21">21

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<input type="radio" name="lang" value="PHP">PHP
<input type="radio" name="lang" value="Python">Python
<input type="radio" name="lang" value="JAVA">JAVA
<input type="radio" name="lang" value="HTML">HTML

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<input type="radio" name="command" value="join">join
<input type="radio" name="command" value="select">select
<input type="radio" name="command" value="insert">insert
<input type="radio" name="command" value="update">update
</br>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="submit" value="回答する"/>
<input type="hidden" name="my_name" value="<?php echo $name;?>"/>
</form>
</body>
</html>
