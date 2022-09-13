<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include "funcs.php";
sschk();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>USERデータ登録</title>
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
                </div>

                <nav class="header_navbar">
                    <div class="navbar_a">
                        <div class="navbar-header"><span>言語選択</span></div>
                        <div class="navbar-header"><a href="user.php">新規登録</a></div>
                        <div class="navbar-login"><a href="login.php">ログイン</a></div>
                    </div>
                </nav>
            </div>
        <?php echo $_SESSION["name"]; ?>さん　
        <!-- <?php include("menu.php"); ?> -->
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="main_banner_wrapper">
    <img src="./img/IMG_4602.jpg" class="user_main_banner" alt="">
    <div class="main_banner_wrapper_child">

        <form method="post" action="user_insert.php">
        <div class="jumbotron">
        <fieldset>
            <legend class="register_title">ユーザー登録</legend>
            <label>名前：<input type="text" name="name"></label><br>
            <label>ログインID：<input type="text" name="lid"></label><br><br>
            <label>Login PW：<input type="text" name="lpw"></label><br>
            <label>管理FLG：
            一般<input type="radio" name="kanri_flg" value="0">　
            管理者<input type="radio" name="kanri_flg" value="1">
            </label>
            <br>
            <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
            <input type="submit" value="登録">
            </fieldset>
        </div>
        </form>
        <p>アカウントがある場合</p>
        <a href="login.php">ログイン</a>
    </div>
</div>
<!-- Main[End] -->


</body>
</html>
