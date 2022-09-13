<?php
session_start();
include("funcs.php");
sschk();
$pdo = db_conn();

$keyword = $_POST['keyword']; //追記1


//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM test_table WHERE name LIKE :keyword");
// keywordはbind変数で渡す
$stmt->bindValue(':keyword', '%'.$keyword.'%', PDO::PARAM_STR); // 追記②
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error($stmt);
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<div class="fav_list">';
    $view .= '<img src="img/'.$r["img"].'" width="300">';
    $view .= '<a href="saunadetail.php?id='.$r["id"].'">';
    $view .= $r["lid"]."|".$r["name"]."|".$r["address"]."|".$r["famous"];
    $view .= '<a>';
    $view .= "";
      $view .= '<a class="btn_delete" href="delete.php?id='.$r["id"].'">';
      $view .= '[<i class="glyphicon glyphicon-remove"></i>🗑]';
      $view .= "";
      $view .= '</a>';
    $view .= '</div>';
  }
}

echo $view;

?>