<?php
//ループ文・条件文分岐
$num = 0;
$i = 1;
while ($num < 40){
    $saikoro = mt_rand(1,6);
    $num = $num + $saikoro;
    echo $i.'回目='.$saikoro;
    echo '<br>';
    $i++;
}
printf("合計%d回でゴールしました", $i);
echo '<br>';
echo '<br>';
?>

<?php
//関数・条件分岐
$time = date_default_timezone_set('Asia/Tokyo');
$intval = date('H');

if('H' < 9){
    printf("今%d時台です<br>おはようございます", $intval);
}elseif('H' < 17){
    printf("今%d時台です<br>こんにちは", $intval);
}else{
    printf("今%d時台です<br>こんばんは", $intval);
}
?>

