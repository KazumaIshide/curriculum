<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>answer</title>
    <link rel="stylesheet" href="smartstyle3.css">
</head>
<body>
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];

$portnum = $_POST['portnum'];
$lang = $_POST['lang'];
$command = $_POST['command'];

$ans_portnum = 80;
$ans_lang = "HTML";
$ans_command = "select";

//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judge($respons, $answer){
    if($respons == $answer){
        echo '正解！';
    }
    else{
        echo '残念・・・';
    }
}
?>

<br>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name ;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
judge($portnum, $ans_portnum);
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
judge($lang, $ans_lang);
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
judge($command, $ans_command);
?>
</body>
</html>
