<?php
$message="Hello World";
?>

<?php
echo $message;
//または//
echo "<br>";
?>

<?php
//""で囲まれているので文字列
$meassage = "Hello World";

echo $meassage;
echo "<br>";
/*
複数行の
コメント
*/
?>


<?php
$x = 8;
$y = 5.55;
var_dump ($x);//変数をカッコで囲むこと
echo "<br>";
var_dump ($y);//変数をカッコで囲むこと
?>

<?php
//論理値の例
echo "<br>";
$flag = true;
var_dump($flag);
?>

<?php
//NULL値、何も入れない時に書く
echo "<br>";
$emp = null;
var_dump($emp);
?>

<?php
echo "<br>API(アプリケーションプログラミングインターフェース)<br>
　APIとはあるコンピュータプログラムの機能や管理するデータなどを、外部の他のプログラムから呼び出して利用するための手順やデータ形式などを定めた規約のこと。<br>
　一般にOSでは、入出力の処理やファイル管理、メモリー管理、ウィンドウ管理などのAPIを規定する。具体的には、関数、プロシージャなどの引数、返り値、データ型、変数、データ構造、オブジェクト指向言語では、クラスやプロパティ、メソッドなどの仕様を含む。アプリケーション開発者はそれらを利用することで、作業の効率化、同じOS上で動作する他のソフトとの連携を容易にする。<br>

SVN（サブバージョン）<br>
　有名なオープンソースのバージョン管理システムの一つ。複数の開発者が共同で一つのソフトウェアを開発する際などに、ソースコードやドキュメントを管理するのに用いられる。<br>
　基本機能として、リポジトリと呼ばれるサーバー上の領域でファイルを手中的に管理し、複数の作業者が平行して内容を更新していくことができるようにする。プロジェクトの時系列をブランチして、派生プロジェクトを作成したり、それを再び元の系統にマージンしたりできる。<br>
";
?>