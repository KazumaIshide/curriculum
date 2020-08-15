<?php
echo '仕様書・設計書<br>
　仕様書は、製品やソフトウェア、情報システム、サービスなどを開発する際に、備えるべき機能やその性能、特性、満たすべき要件などを図表や文章などで記述した文書。情報システムの受託開発のように発注者と受注者が分かれている場合は、金額や期間の算定根拠や交渉の前提条件ともなるので、両者間で齟齬が内容入念に作りこんでいく。<br>
　一般的には、何を作るかを記し、どのように作るかは書かない。開発や製造の方法、構造の詳細や構成要素、使用する材料や部品などは設計工程で検討し、設計書や設計図などの形でまとめることが多い。<br>

　設計書は、仕様を実現するために、どのようにしたかその方法を記載した書類。設計書には基本設計書と詳細設計書があり、基本設計書はシステムを外から見たときにどういう動きをするかを記し、詳細設計書は基本設計書の動きをどのように実現するかを記す。設計書には、<br>
	システムの概要<br>
	システムの構成図<br>
	ネットワークの構成図<br>
	業務フロー<br>
	機能一覧<br>
	各機能詳細<br>
	テーブル定義<br>
	ER図<br>
	画面レイアウト<br>
	開発体制<br>
	開発スケジュール<br>
　を記す。（プロジェクトにより多少変化する。）<br>

<br>Git<br>
　Gitはプログラムソースなどの変更履歴を管理する分散型のバージョン管理システムのこと。もとはLINUXの開発チームが使用し、その後世界中に広まった。<br>
　Gitの最大の特徴は、ローカル環境（自分のパソコンなど）に、全ての変更履歴を含む完全なリポジトリが複製されること。これは、各ローカル環境がリポジトリのサーバーとなれること。サーバー状の1つのリポジトリを共同で使うと、変更内容が衝突するなど、整合性を維持するのが大変だった。Giｔではローカル環境にもコードの変更履歴を保存（コミット）することができるので、リモートサーバーに常に接続する必要がない。<br>
　Githubはこのgitのしくみを利用して、世界中の人々が自分の作品を保存、公開できるようにしたもの。Githubに作成されたリポジトリは、基本的に全て公開される。<br>

<br>マージツール<br>
　マージとは、融合、合併、統合を意味し、複数帆ファイルやデータ、プログラムなどを決められたルールに従って一つに統合すること。また、バージョン管理システムなどで管理している開発中のプログラムなどに、新たにコードを追加したり、修正を反映させたりする操作をマージという。<br>
　マージツールは、マージを行うツール。大きく分けて2ウェイマージと3ウェイマージがあるが、3ウェイマージの方が協力で信頼性も高い。<br>';
?>