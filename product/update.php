<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$address  = $_POST["address"];
$famous = $_POST["famous"];
$id     = $_POST["id"];
$img   = fileUpload("upfile","upload");

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE sauna4 SET name=:name,address=:address,famous=:famous,img=:img WHERE id=:id");
$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':address',  $address,  PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':famous', $famous, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':img',    $img,    PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("sauna.php");
}
?>
