<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3章チェックテスト</title>
  <link rel="stylesheet" href="smartstyle.css">
</head>
<body>
  <div id="wrapper">
    <br>
    <br>
    <h1 class="header">3章チェックテスト</h1>
    <hr>
    <!--名前を入力してquestion.phpに移動するフォームを作成-->
    <p>
      <br>
      <div class="main"> 
        <form action="question.php" method="post"> 
          <input type="text" name="my_name" placeholder="名前を入力してください">  
          <input type="submit" value="テスト開始">
        </form>
      </div>
    </p>
  </div>
</body>
</html>