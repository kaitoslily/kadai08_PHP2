<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>星空観測会登録フォーム</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">イベント案内🌸春のぷらっと星空観望会🌸</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<?php
include("inc/head.html");
include("inc/menu.html");
?>
<!-- Main[Start] -->
<!-- どこに飛ばすか確認する -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録フォーム</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>Email：<input type="text" name="email"></label><br>
     <label>年齢：<input type="text" name="age"></label><br>
     <label>🎪テントで楽しむおはなしタイム🎪（時間予約制・先着10名様）<br>
<input type="radio" name="reservation" name="reservation_type01" value="20:00-20:30">20:00-20:30<br>
<input type="radio" name="reservation" name="reservation_type02" value="21:00-21:30">21:00-21:30<br>
     <label>コメント：<br><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<?php
// 関数用のファイルを使用できるように呼び出す
require_once('funcs.php');
// 上記のfuncs.phpに書いている関数(db_conn)を呼び出して
// データベースに接続し、データ取得できるようにします。
// なるべく呼び出し先の関数と同じ変数名($pdoのことです)にしておくのが混乱を防ぐのにおすすめです
$pdo = db_conn();
// 下記でSQL文を実行します
// 下記ではgs_an_tableテーブルのデータを全権取得する書き方になっています
$stmt = $pdo->prepare('SELECT * FROM gs_an_table');
// 実行結果をboolean(true or false)で取得します
$status = $stmt->execute();
?>
<!-- Main[End] -->
<?php
include("inc/foot.html");
?>
</body>
</html>