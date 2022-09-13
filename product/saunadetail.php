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

$view="";
if($status==false) {
  sql_error($stmt);
}else{
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<div class="fav_list">';
    $view .= '<a href="saunadetail.php?id='.$r["id"].'">';
    $view .= $r["lid"]."|".$r["name"]."|".$r["address"]."|".$r["famous"];
    $view .= '<a>';
    $view .= '<img src="img/'.$r["img"].'" width="300">';
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
                <img src="img/<?=$row["img"]?>" name="img" class="sauna_main_banner_img" value="<?=$row["img"]?>">
            </div>
            <div>
                    <div class="container_jumbotron" id="view"><?=$view?></div>
            </div>
            <!-- Main[Start] -->
            <form method="POST" action="insert.php" enctype="multipart/form-data">
                <div class="jumbotron">
                    <fieldset>
                        <legend class="info_title">店舗情報</legend>
                        <label><input type="hidden" name="img" value="<?=$row["img"]?>"></label>
                        <label>店名<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
                        <label>場所<input type="text" name="address" cols="200"value="<?=$row["address"]?>"></label><br>
                        <label>人気度<input type="text" name="famous" rows="6" cols="100" value="<?=$row["famous"]?>"></label><br>
                        <label>料金<textArea name="fee" rows="4" cols="40"><?=$row["fee"]?></textArea></label><br>
                        <!-- <label>料金 <img src="img/<?=$row["img"]?>" name="img" value="<?=$row["img"]?>"><?=$row["img"]?></label><br> -->
                        <input type="submit" value="お気に入りに追加">
                    </fieldset>
                </div>
            </form>

            <h3>口コミ</h3>
            【さやさや清かな澄んだ体験】

                「さや」は日本の古語で「清」と書き、 清らかな様、音が澄んで響く様、 色が明瞭で鮮やかな様を表します。 水の流れや木の葉のそよぎ、 を照らす優しい木もれ日…
                私たちが普段の忙しさや都会の喧騒で 忘れがちなものを感じられる、 そんな場所でありたいと願って 「さやの湯処」と名付けました。
                （HPより抜粋）
                <br>
                なんて素敵な日本語でしょう。日本に生まれて良かった。
                子供の頃に好きだった子の名前に清(さや)って入ってたな、なんて思い出しながら。
                志村坂上駅からてくてく歩き、見次公園を通り抜けてやってきました。前野原温泉　さやの湯処さん。
                <br>
                朝9時から営業してくださるありがたさ。スタッフの皆さん、ありがとうございます。
                行きの電車でさうなと3を読み、サウナ前のレディネスはばっちり整っております。いざ。
                <br>
                #お風呂
                天然温泉。薄いうぐいす色のにごり湯、源泉かけ流し。内湯には炭酸泉や腰掛け湯。露天には寝湯や壺湯も。露天は日本庭園のような和テイストであり、屋根付きで日除けできる湯船や、風鈴もある。夏。綺麗なお湯に浸かり、青空を見上げながら、ほっと一息。贅沢な休日だ。
                <br>
                #熱気風炉
                二重扉の一つ目を開くと、ヒノキ？のようなとてもいい香り。中へ入ると、4段がけ17名と広めのタワー型サウナ。本棚のように大きな遠赤外線ストーブが、サ室を温めてくれている。なかなかいい。TVを見ながら蒸され、ぷつぷつ、どっしり、汗をかける。マット交換は1日2回。もう少し多いとさらにベネ。

                #薬草塩蒸風炉
                8名がけのスチームサウナ。塩は2つの扉の間に置かれているのでちょいと不便。中に入ると、薬草入りと思われる袋がポッポッポッと蒸されている。謎のパイプからブォーと温風が出ており、攪拌の役割か。
                数分待ち、汗が出始めたら塩を全身に乗せていく。強く擦るのはNG。さらに待つこと数分、汗どば。これが塩サウナの醍醐味。
                出口の脇にシャワーあり。霧しぶきと太陽光が戯れて、私の手元で小さな虹が2つ、重なって見えました🌈

                #水風呂
                しっかり冷た〜い。そして深い。グッドです。6名は入れそう。

                #休憩
                イスやベンチがいくつかあります。私の好みは外気浴。目を瞑って、深呼吸。温かく心地よい風が、私の肌を優しく撫でていく。背中の産毛がぴんっぴんっ、ぱりっぱりっ、と立つような感覚。さらに日光が私の肌を照らし、細かな乱反射により、輝いて見えました。「こんなに綺麗な肌色ってあるんだ…」

                利用者の皆さんのマナーも素晴らしく、静かで澄んだ、それでいて鮮やかな、とっても良い体験ができました。
                ありがとうございました！☺️
            <h3>アクセス</h3>
            <h3>あなたへのおすすめ</h3>
        </div>
    <!-- Main[End] -->
    <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Japan Picks All Rights Reserved.
            </small>
        </footer>
    </body>


</html>