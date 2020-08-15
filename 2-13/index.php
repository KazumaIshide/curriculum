<?php
echo '数字に関する乱数';
echo '<br>';
//切り上げ
$x = 5.42;
echo ceil($x);
echo '<br>';
//切り捨て
$x = 132.3
echo floor($x);
echo '<br>';
//四捨五入
$x = 34.4;
echo round($x);
echo '<br>';
//円周率
echo pi();
echo '<br>';
//乱数
echo mt_rand(1,100);
echo '<br>';
?>

<?php
echo '<br>文字列に関する関数';
echo '<br>';
//文字列の長さ
$str = "fdjifdus";
echo strlen($str);
echo '<br>';
//検索
$str = "ishide";
echo strpos($str, "i");
echo '<br>';
//文字列の切り取り
echo substr($str, -2, 2);//(対象文字列, 開始位置, 文字数)
echo '<br>';
//置換
echo str_replace("shi", "SHI", $str);
echo '<br>';
//置換で空白の削除
$str = "I am ishide";
echo str_replace(" ", "", $str);
echo '<br>';
//マルチバイト対応
$str = "あいうえお";
echo mb_strlen($str);
echo '<br>';

$name = "斎藤さん";
$limit_number = 40;
echo $name.'の残り時間はあと'.$limit_number.'分です';
echo '<br>';
//フォーマット化した文字列の出力
printf('%sの残り時間はあと%d分です', $name, $limit_number);
echo '<br>';
$limit_number = 3;
printf("%sの残り時間は%02d分です", $name, $limit_number);
echo '<br>';
//変数に代入できる
$loimit_time = sprintf("残り時間は%d分です", $limit_number);
echo $loimit_time;
echo '<br>';
?>

