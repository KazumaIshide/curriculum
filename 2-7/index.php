<?php
$color = ["red" => "赤", "blue" => "青","green" => "緑"];
var_dump($color);
echo '<br>';
//要素の追加
$color["yellow"] = "黄色";
var_dump($color);
echo '<br>';
?>

<?php
echo'<br>プルリクエスト<br>
　プルリクエストは、開発者のローカルリポジトリでの変更を他の開発者に通知する機能。<br>
・機能追加や改修、作業内容をレビュー・マージ担当者やそのた関係者に通知する。<br>
・ソースコードの変更箇所を分かりやすく表示する。<br>
・ソースコードに関するコミュニケーションの場を提供する。<br>
　プルリクエストは一覧で見れ、未完了のプルリクエストを簡単に確認できる。プルリクエストもれなく作業できる。<br>

<br>Git flow<br>
　Git flowとは、gitの機能であるブランリを活用したgitの開発手法。ツールの名前でもある。複数人による津央樹の開発を行う場合、運用ルールを決めずにgitを採用すると、コンフリクトが頻繁に起き、マージのミスが発生したりする。<br>

Git flowはそれぞれmaster、release、develop、feature、hot-fixの5つのブランチを使い分けて開発する。<br>
1.	Feature：開発を行うためのブランチ、個々の機能の実装やバグの解決を行う<br>
2.	Develop：開発を行う<br>
3.	Release：リリース前に準備、微調整を行うブランチ<br>
4.	Master：リリースしたデータを置いておくブランチ<br>
5.	Hot-fix：リリースされているデータに、緊急の修正対応するためのブランチ<br>

<br>Cron<br>
　多くのunixOSの標準的な常駐プログラムんほ一種で、利用者の設定したスケジュールに従って指定されたプログラムを定期的に起動してくれるもの。<br>
　利用者がcrontabコマンドで実行したいプログラムやコマンド、シェルスクリプトなどと実行日時をしたいするとテキストファイルに設定が保持される。決まった時刻に指定プログラムが実行される。<br>
' ;
?>