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
                    <div class="navbar-header"><a class="navbar-brand_on" href="restaurant.php">グルメ</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="hotel.php">宿泊施設</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="sauna.php">温泉・サウナ</a></div>
                    <div class="navbar-header"><a class="navbar-brand" href="favorite.php">お気に入り</a></div>
                </div>
            </nav>

        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
            <div>
                
                <img src="./img/yakitori.jpeg" class="main_banner_img" alt="sushi_banner">
                <h1 class="hotel_main_banner_title">What Japanese eat in Tokyo</h1>
            </div>
        
            <div class="all_content_container">
            <h2 class="hotel_title">東京23区のレストラン</h2>

            <h2 class="list_title">寿司</h2>
                <ul class="sushi_list">
                    <li class="sushi_item" >
                        <div>
                            <a href="shopdetail.php"></a>
                            <div class="sushi_eyecatch">
                                <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/75770/75770174.jpg?token=d6eb6f2&api=v2" alt="" width="90%" height="90%" >
                            </div>
                            <a href="shopdetail.php" class="sushi_name">銀座　青空</a>
                            <h6 class="sushi_rating">⭐︎4.3</h6>
                            <h6 class="sushi_payment">カード支払可能</h6>
                            <h6 class="sushi_price">JPY 40,000~49,999</h6>
                        </div>
                    </li>
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/120936/120936993.jpg?token=a7017fa&api=v2" alt="" width="90%" height="90%">
                        </div>
                        <h6 class="sushi_name">新ばし しみづ</h6>
                        <h6 class="sushi_rating">⭐︎3.97</h6>
                        <h6 class="sushi_rating">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 20,000~29,999</h6>
                    </li>
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/120487/120487784.jpg?token=0eef1b0&api=v2" alt="" width="90%" height="90%">
                        </div>
                        <h6 class="sushi_name">紀尾井町三谷</h6>
                        <h6 class="sushi_rating">⭐︎3.96<h3>
                        <h6 class="sushi_rating">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 30,000~39,999</h6>
                    </li>
                </ul>

                <h2 class="list_title">焼肉</h2>
                <ul class="sushi_list">
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                            <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/92190/92190192.jpg?token=a2414da&api=v2" alt="" width="90%" height="90%" >
                        </div>
                        <a href="shopdetail.php" class="sushi_name">蕃 YORONIKU</a>
                        <h6 class="sushi_rating">⭐︎4.37</h6>
                        <h6 class="sushi_payment">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 10,000~14,999</h6>
                    </li>
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/121182/121182378.jpg?token=e68e3ed&api=v2" alt="" width="90%" height="90%">
                        </div>
                        <h6 class="sushi_name">赤坂　らいもん</h6>
                        <h6 class="sushi_rating">⭐︎4.38</h6>
                        <h6 class="sushi_rating">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 15,000~19,999</h6>
                    </li>
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/86078/86078117.jpg?token=c329ae2&api=v2" alt="" width="90%" height="90%">
                        </div>
                        <h6 class="sushi_name">焼肉 ジャンボ はなれ</h6>
                        <h6 class="sushi_rating">⭐︎4.32<h3>
                        <h6 class="sushi_rating">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 10,000~14,999</h6>
                    </li>
                </ul>

                <h2 class="list_title">焼き鳥</h2>
                <ul class="sushi_list">
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                            <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/69191/69191741.jpg?token=d6909da&api=v2" alt="" width="90%" height="90%" >
                        </div>
                        <h6 class="sushi_name">鳥しき</h6>
                        <h6 class="sushi_rating">⭐︎4.52</h6>
                        <h6 class="sushi_payment">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 6,000~7,999</h6>
                    </li>
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/167045/fe7a1d07442d81e6b620312a47155ffc.jpg?token=7dcf0ad&api=v2" alt="" width="90%" height="90%">
                        </div>
                        <h6 class="sushi_name">オオクサ</h6>
                        <h6 class="sushi_rating">⭐︎4.22</h6>
                        <h6 class="sushi_rating">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 7,000~8,999</h6>
                    </li>
                    <li class="sushi_item">
                        <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/65281/65281368.jpg?token=beb023d&api=v2" alt="" width="90%" height="90%">
                        </div>
                        <h6 class="sushi_name">焼鳥　おみ乃</h6>
                        <h6 class="sushi_rating">⭐︎4.20<h3>
                        <h6 class="sushi_rating">カード支払可能</h6>
                        <h6 class="sushi_price">JPY 8,000~9,999</h6>
                    </li>
                </ul>
            </div>
        <!-- Main[End] -->
        <script type='text/javascript' src="./js/jquery-3.5.1.min.js"></script>

         <!-- Main[End] -->
         <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Japan Picks All Rights Reserved.
            </small>
        </footer>
    </body>

</html>