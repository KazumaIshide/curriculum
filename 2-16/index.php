<?php
//書き込み
$testFile = "test.txt";
$contents = "こんにちは！";

if(is_writable($testFile)){
    //書き込み可能な時の処理
    //とりあえず確認のため、echoで表示
    echo "writable!";
    echo '<br>';
    //対象のファイルを開く
    $fp = fopen($testFile, "a");
    //対象のファイルに書き込む
    fwrite($fp, $contents);
    //ファイルを閉じる
    fclose($fp);
    //書き込みをした旨の表示
    echo "finish writing!!";
}else {
    //書き込み不可の時の処理
    echo "not writable!";
    exit;
}
?>

<?php
//読み込み
$testFile = "test2.txt";

if(is_readable($testFile)){
    //読み込み可能な時の処理
    //対象のファイルを開く
    $fp = fopen($testFile, "r");
    //開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)){;
        //改行コード込みで1行ずつ出力
        echo $line.'<br>';
    }
    //ファイルを閉じる
    fclose($fp);
}else {
    //読み込み不可の時の処理
    echo "not readable!";
    exit;
}
?>
