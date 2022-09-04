<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>What Japanese Do</title>
        <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
        <style>div{padding: 10px;font-size:16px;}</style>
    </head>
    <body>

        <!-- Head[Start] -->
        <header>
            <div class="navbar-header"><a href="index.php">What Japanese Do</a></div>
         
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header"><span>言語選択</span></div>
                    <div class="navbar-header"><a href="login.php">ログイン</a></div>
                    <div class="navbar-header"><a href="register.php">新規登録</a></div>
                </div>
            </nav>
        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
            <div>
                <h2>東京23区のレストラン</h2>
                <img src="./img/sushi.jpeg" alt="sushi_banner">
                <h1>What Japanese eat in Tokyo</h1>
                <input type="text" name="q" id="keyword" value>
                <button id="search">Search</button>

            </div>
        
        <div>
           <p>寿司</p>
            <div>
                <a href="shopdetail.php">１店目</a>
            </div>
        </div>
        <div>
            <p>焼肉</p>
        </div>
        <div>
            <p>居酒屋</p>
        </div>
        <div>
            <p>天ぷら</p>
        </div>
        <!-- Main[End] -->
        <script type='text/javascript' src="./js/jquery-3.5.1.min.js"></script>
        

    </body>

</html>