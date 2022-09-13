<?php
// session_start();
include("funcs.php");
// sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM sauna4");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  sql_error($stmt);
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p class="sauna_list">';
    $view .= '<a href="saunadetail.php?id='.$r["id"].'" class="sauna_item">';
    $view .= $r["id"]."|".$r["name"];
    $view .= '<br>';
    $view .= "人気度".$r["famous"];
    $view .= '</a>';
    $view .= '<img src="img/'.$r["img"].'" width="300">';
    $view .= "";
    $view .= '</p>';
    $view .= '<br>';
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Japan Picks</title>
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
                    <div class="navbar-header"><a class="navbar-brand_on" href="sauna.php">温泉・サウナ</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="favorite.php">お気に入り</a></div>
                </div>
            </nav>

        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
            <div>
                <img src="./img/onsen_header.jpeg" class="main_banner_img" alt="sauna_banner">
                <h1 class="hotel_main_banner_title">Where to Relax in Japan</h1>

            </div>
            <div class="all_content_container">
                <h2 class="hotel_title">東京の温泉・サウナ</h2>
                <div>
                    <div class="container_jumbotron" id="view"><?=$view?></div>
                </div>
            </div>
        
        <!-- Main[End] -->
        <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Japan Picks All Rights Reserved.
            </small>
        </footer>

        <script type='text/javascript' src="./js/jquery-3.5.1.min.js"></script>
    </body>

</html>