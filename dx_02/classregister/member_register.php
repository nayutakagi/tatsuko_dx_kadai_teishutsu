<?php

// //基本的な設定情報
// require '../function.php';
// require '../model/model.php';


// $params = array(
//     'classname' =>$_POST['classname'], //<-自分のカラム名に書き換える. 左は自分で作ったカラム名、右はhtmlのname
//     'capacity' =>$_POST['capacity']
// );

// //tableName -> テーブル名を管理する配列

// $tableName = 'class_db';  //<-自分のテーブル名に書き換える

// //差異のあるデータをクラスからコピーしたものに投げることによって
// //目的の機能を実行することができる
// $course = new Model($params, $tableName);
// $course -> store();

// //登録がうまくいったらindex.phpへ飛ばす
// header('Location: index.php'); //：のあとに必ず半角スペースを入れる事！


//1. POSTデータ取得
$member_name   = $_POST['member_name'];
$classname    = $_POST['classname'];

//2. DB接続します(エラー処理追加) 毎回コピペでまったく問題なし
try {
    $pdo = new PDO('mysql:dbname=tatsuko_dx_php02;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }

  //３．データ登録SQL作成 （コロン+任意の文字でOK）
//bindValueで渡す(:任意, 変数$name, PDO::PARAM_STR or PDO::PARAM_INT )

$sql = "INSERT INTO member_db(id, member_name, classname, indate)VALUES(NULL, :member_name, :classname, sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':membar_name', $member_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':classname', $classname, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //executeで実行

//４．データ登録処理後 全コピペでOK
if($status==false){
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
  
  }else{
    // ５．index.phpへリダイレクト
    header("Location: member.php"); //：のあとに必ず半角スペースを入れる事！
    exit;
  
  }


?>