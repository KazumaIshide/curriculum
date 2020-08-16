<?php
$members =[3, 5, 34, 54, 34, 23, 12, 65, 2];
//要素の数を数える
echo count($members);
echo '<br>';
//要素を並び変える
sort($members);
var_dump($members);
echo '<br>';
//配列にある要素が存在しているか
var_dump(in_array(34, $members));
echo '<br>';
$members = ["saitou", "tanaka", "sato", "suzuki", "kobayasi"];
if (in_array("hayasi", $members)){
    echo '林さんがいるよ';
}else{
    echo '林さんはいないよ';
}
echo '<br>';
//配列を結合し文字列に変換
$atstr = implode('<br>',$members);
var_dump($atstr);
echo '<br>';
//文字列を指定の区切りで配列にする
$re_members = explode('<br>', $atstr);
var_dump($re_members);
echo '<br>';
$str = "3,23,43,5,43,123,45,23,2,12,76,456,73";
$array = explode(",", $str);
var_dump($array);
?>

