<?php
session_start();
$id = $_GET["id"]; //?id~**を受け取る
include("funcs.php");
// sschk();
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM sauna4 WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error($stmt);
}else{
    $row = $stmt->fetch();
}
?>



<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Japan Picks</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
                        <input type="text" name="q" class="header_search-box" placeholder="行き先・アクティビティを入力">
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
                    <div class="navbar-header"><a class="navbar-brand" href="favorite.php">お気に入り</a></div>
                </div>
            </nav>

        </header>
        <div class="all_content_container">
            <div class="sauna_main_banner">
                <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/92190/92190192.jpg?token=a2414da&api=v2"  class="sauna_main_banner_img" alt="">
            </div>
            <!-- Main[Start] -->
            <form method="POST" action="insert.php" enctype="multipart/form-data">
                <div class="jumbotron">
                    <fieldset>
                        <legend class="info_title">店舗情報</legend>
                        <label><input type="hidden" name="img" value="https://www.sayanoyudokoro.co.jp/wp-content/themes/sayanoyudokoro/files/images/home/img_int1.jpg"></label>
                        <label>店名<input type="text" name="name" value="蕃 YORONIKU "></label><br>
                        <label>場所<input type="text" name="address" value="東京都渋谷区恵比寿1-11-5 GEMS恵比寿 8F"></label><br>
                        <label>人気度<input type="text" name="famous" rows="6" cols="100" value="4.37"></label><br>
                        <label>料金<textArea name="fee" rows="4" cols="40">￥10,000～￥14,999</textArea></label><br>
                        <input type="submit" value="お気に入りに追加">
                    </fieldset>
                </div>
            </form>


            <h3>見どころ</h3>
            <h2>美食の街、恵比寿に佇む 肉ラヴァーを魅了し続ける ～新世代の肉割烹～</h2>
            
            <h3>南青山［よろにく］の流れをくむ［蕃 YORONIKU］。［よろにく］の代名詞［シルクロース］をはじめ、洗練された技で、美しくカットされたお肉は、まるで芸術品のよう。最高の瞬間を見極めながら、丁寧に焼き上げる。ユッケや、白センマイからなる［冷製盛り合せ］は、この店の実力を知るに相応しい鮮烈な一皿。ゲストの好奇心を斟酌する“絶妙なコース”に酔いしれながら、日本が誇る和牛の新たな魅力に開眼できるはずだ。</h3>
            <h3>アクセス</h3>
            <h3>予約はこちらから</h3>
            <a href="https://tabelog.com/tokyo/A1303/A130302/13211927/">https://tabelog.com/tokyo/A1303/A130302/13211927/</a>
        </div>
    <!-- Main[End] -->
    <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Japan Picks All Rights Reserved.
            </small>
        </footer>
    </body>


</html>