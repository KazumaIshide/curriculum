<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smartstyle2.css">
    <title>question</title>
</head>

<body>
<form action="answer.php" method="post">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
//② ①で作成した、配列から正解の選択肢の変数を作成してください
?>

<br>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->


<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php $array = [80, 22, 20, 21];?>
<?php foreach ($array as $portnum):?>
    <span>
    <input type="radio" name="portnum" value="<?php echo $portnum; ?>">
    <?php echo $portnum ;?>
    </span>
<?php endforeach; ?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php $array = ['PHP', 'Python', 'JAVA', 'HTML'];?>

<?php foreach($array as $lang):?>
    <span>
    <input type="radio" name="lang" value="<?php echo $lang; ?>">
    <?php echo $lang;?>
    </span>
<?php endforeach;?>

<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php $array = ['join', 'select', 'insert', 'update'];?>
<?php foreach($array as $command):?>
    <span>
    <input type="radio" name="command" value="<?php echo $command; ?>">
    <?php echo $command;?>
    </span>
<?php endforeach;?>
<br>
<br>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="submit" value="回答する"/>
<input type="hidden" name="my_name" value="<?php echo $name;?>"/>
</form>
</body>
</html>
