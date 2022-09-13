<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

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
                    </div>
                </nav>
            </div>
        </header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<div class="main_banner_wrapper">
    <img src="./img/IMG_7830.jpg" class="user_main_banner" alt="">
    <div class="main_banner_wrapper_child">
        <p class="register_title">ログイン</p><br>
        <form name="form1" action="login_act.php" method="post">
        ID:<input type="text" name="lid" class="login_id" /><br>
        PW:<input type="password" name="lpw" class="login_pw" /><br>
        <input type="submit" value="LOGIN" /><br>
        </form>
    </div>
</div>
  <!-- Main[End] -->
  <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Japan Picks All Rights Reserved.
            </small>
    </footer>

</body>
</html>