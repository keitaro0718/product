<?php
session_start();
include("funcs.php");
sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM test_table");
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
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Japan Picks</title>
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <div class="header_inner">
                <div class="header_left">
                    <h1 class="header_title">
                        <a href="index.php">Japan Picks</a>
                    </h1>
                    <div class="header_search-box_input">
                        <input type="text" name="q" class="header_search-box" value="行き先・アクティビティを入力">
                    </div>
                </div>

                <nav class="header_navbar">
                    <div class="navbar_a">
                        <div class="navbar-header"><span>言語選択</span></div>
                        <div class="navbar-header"><a href="user.php">新規登録</a></div>
                        <div class="navbar-login"><a href="login.php">ログイン</a></div>
                    </div>
                </nav>
            </div>
            <nav class="header_secondary_navbar">
                <div class="header_secondary_container">
                    <div class="navbar-header"><a class="navbar-brand" href="restaurant.php">グルメ</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="hotel.php">宿泊施設</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="sauna.php">温泉・サウナ</a></div>
                    <div class="navbar-header"><a class="navbar-brand_on" href="favorite.php">お気に入り</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
    <div class="all_content_container">
        <div>
            <input type="text" id="keyword">
            <button id="send">検索</button>
        </div>
        <div class="container_jumbotron" id="view"><?=$view?></div>
    </div>
    <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Japan Picks All Rights Reserved.
            </small>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
        //登録ボタンをクリック
        $("#send").on("click", function() {
            //axiosでAjax送信
            //Ajax（非同期通信）
            const params = new URLSearchParams();
            params.append('keyword',   $("#keyword").val());
            
            //axiosでAjax送信
            axios.post('favorite2.php',params).then(function (response) {
                console.log(typeof response.data);//通信OK
                if(response.data){
                // select2.phpにparamsをなげて、帰ってきたでデータの中身があれば、処理をする
                //>>>>通信でデータを受信したら処理をする場所<<<<
                document.querySelector("#view").innerHTML=response.data;
                
                }
            }).catch(function (error) {
                console.log(error);//通信Error
            }).then(function () {
                console.log("Last");//通信OK/Error後に処理を必ずさせたい場合
            });
        });
        </script>
    </body>

</html>