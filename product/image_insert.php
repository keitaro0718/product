<?php
session_start();
include("funcs.php");
$pdo = db_conn();
//1. POSTデータ取得
$img   = fileUpload("upfile","upload");

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE sauna4 SET img=:img WHERE id=:id");
$stmt->bindValue(':img', $img);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>
