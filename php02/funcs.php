<!-- kadai08_PHP02 DB操作(登録・参照)--> 
<?php
// よく使う処理や複数のpfpファイルで使う処理を関数化
// XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数：db_conn()　PDO(PHP Data Object) を使ってDBに接続する
function db_conn(){
  try {
    $db_name = "stella-kaitos_gs_db"; //データベース名
    $db_id   = "stella-kaitos";       //アカウント名
    $db_pw   = "sakuradb5";           //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
    $db_host = "mysql57.stella-kaitos.sakura.ne.jp";  //DBホスト
    return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
  } catch (PDOException $e) {
    exit('DB_CONNECT_ERROR:'.$e->getMessage());
  }
}

//SQLエラー関数：sql_error($stmt)
//$statusがFalseの場合、つまりSQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
function sql_error($stmt){ 
  $error = $stmt->errorInfo();
  exit("SQL_ERROR:".$error[2]);
}

//リダイレクト関数: redirect($file_name)
//$statusがTrueの場合、つまりSQL実行が成功した場合
//LocationのLは大文字、コロンの後は半角スペース入れる
function redirect($file_name){
  header("Location: ".$file_name);
  exit();
}