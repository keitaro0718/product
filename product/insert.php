<?php
session_start();
include("funcs.php");
$pdo = db_conn();
//1. POSTデータ取得
$name   = $_POST["name"];
$address  = $_POST["address"];
$famous = $_POST["famous"];
$fee = $_POST["fee"];
$img   = $_POST["img"];

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO test_table( name, address, famous, fee, img, indate )VALUES(:name, :address, :famous, :fee, :img, sysdate())");
$stmt->bindValue(':name', $name);
$stmt->bindValue(':address', $address);
$stmt->bindValue(':famous', $famous);
$stmt->bindValue(':fee', $fee);
$stmt->bindValue(':img', $img);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
    
  redirect("favorite.php");
  function func_alert($message){
    echo "<script>alert('$message');</script>";
}
func_alert("お気に入りに追加しました");
}
?>