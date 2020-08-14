<?php
//ここではログイン成功する条件を入れる
$name = 'taro';
$password = 'pass';

if ($name == 'taro' && $password == 'pass'){
    echo 'ログイン成功です。';
}elseif ($name == 'taro' && $password != 'pass'){
    echo 'パスワードが間違っています。';
}elseif ($name != 'taro' && $password == 'pass'){
    echo '名前が間違っています。';
}else {
    echo '入力情報が間違っています。';
}
?>

