
<?php
//while文で記述
$num = 1;
while ($num <= 100){
    echo $num;
    echo'<br>';
    $num++;
}
?>

<?php
//for文で記述
echo '<br>';
$num = 1;
for ($i=0; $i<100 ; $i++){
    echo $num;
    echo '<br>';
    $num++;
}
?>

<?php
echo 'サブクエリSQL<br>
　データベースなどの問い合わせ（クエリ）文の内部に含まれる、別の問い合わせ文のこと。サブクエリの結果を反映したクエリを実行することができる。<br>

　よく用いられるのは、SQLのselect文を利用したサブクエリで、select文や他の様々な文の中に別のsekect文をサブクエリとして埋め込み、その実行結果を記述する際の値として利用する。サブクエリ中の条件などの記述にさらにサブクエリを用いて何段階も入れ子上にすることもできる。<br>
 
　サブクエリを用いると、データを一度制御プログラムに引き取って処理しなくても、1つのクエリの記述・実行だけで多様な処理を行うことができるが、処理の負荷が大きく実行に時間がかかることが多い。<br>

<br>Bootstrap（ブートストラップ）<br>
　ブートとはコンピュータを起動すること。また、人間がコンピュータに電源を投入（あるいはリセット）してから、OSが操作可能な状態になるまでに自動的に行われる一連の処理。<br>
　電源が入ると、自動的にマザーボードの不揮発性メモリ（ROMやフラッシュメモリ）に記録された（1次）ブートローダと呼ばれる小さなプログラムが実行する。ブートローダは起動デバイスに指定されたストレージ装置（内蔵ハードディスクやSSD、光学ディスク、USBメモリなど）の先頭部分などの特殊な領域から（2次）ブートローダを読み込んで実行する。<br>
　2次ブートローダは設定情報などからOSが書き込まれた領域などを認識し、OS本体をストレージから読み込んで実行する。マルチブート対応のブートローダの場合、ストレージに複数のOSを保存して起動時に利用者がどれを起動するか選択するようにすることもできる。<br>


<br>ライブラリ・フレームワーク<br>
 
ライブラリ<br>
　様々なプルグラムが共通して利用する汎用性の高いプログラムを集めたもの。ライブラリには、ある言語で必ず利用可能な「標準ライブラリ」だけでなく、特定用途のプログラムの場合のみ追加で導入して使うプログラムを集めたライブラリもある。例えば、JavaScriptのjQUeryというライブラリはHTML操作用のライブラリ。<br>

フレームワーク<br>
　アプリケーション開発の際の土台として機能するソフトウェアのことで、一般的に、このソフトウェアに機能を追加して開発を進めていく。開発にフレームワークを利用すると、各々必要とされるパートのみの開発で済むため、開発効率がいい。<br>

　ライブラリは全体を制御するコードを開発者が記述し、ライブラリの提供する個別きのうを呼び出す形。一方、フレームワークは全体を制御するのはフレームワーク側のコードで、そこから開発者が個別に追加した機能を呼び出す形。このように、制御―被制御の関係が反転している。<br>
';
?>