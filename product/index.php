<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>What Japanese Do</title>
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
                        Find What Japanese Do
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
                    <div class="navbar-header"><a class="navbar-brand" href="favorite.php">お気に入り</a></div>
                </div>
            </nav>

        </header>
        <!-- Head[End] -->

        <!-- Main[Start] -->
        <div class="main_banner">
                <img src="./img/onsen.jpg" class="main_banner_img" alt="main_banner">
                <h1 class="main_banner_title">Find What Japanese Do</h1>
                <p class="main_banner_subtitle">日本人の間で流行っているお店・アクティビティが見つかる</p>
                <div class="main_banner_search-area">
                    <input type="text" name="q" class="main_banner_search-box" value>
                    <button class="main_banner_search-button">検索</button>
                </div>

            </div>
        <div class="recommend">
            <a href="recommend.php">あなたへのおすすめ</a>
        </div>
        <!-- レストランコーナー -->
        <div class="restaurant">
            <div class="restaurant_title">
                <a href="restaurant.php">グルメ</a>
            </div>
            <ul class="sushi_list">
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                        <img src="https://tblg.k-img.com/resize/660x370c/restaurant/images/Rvw/75770/75770174.jpg?token=d6eb6f2&api=v2" alt="" width="90%" height="90%" >
                    </div>
                    <h6 class="sushi_name">銀座　青空</h6>
                    <h6 class="sushi_rating">⭐︎4.3</h6>
                    <h6 class="sushi_payment">カード支払可能</h6>
                    <h6 class="sushi_price">JPY 40,000~49,999</h6>
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
            <div>
            <a href="restaurant.php"class="btn">More</a>
            </div>

        </div>
        <div class="hotel">
            <div class="hotel_title">
            <a href="hotel.php">宿泊施設</a>
            </div>

            <ul class="sushi_list">
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                        <img src="https://fieldsuite-hakuba.com/en/wp-content/uploads/sites/2/2018/11/3_ISO00490.jpg" alt="" width="90%" height="90%">
                    </div>
                    <h6 class="sushi_name">KITAONE KOGEN ~hakuba~</h6>
                    <h6 class="sushi_rating">長野県北安曇郡</h6>
                    <h6 class="sushi_payment">カード支払可能</h6>
                    <h6 class="sushi_price">JPY 70,000~</h6>
                </li>
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                    <img src="https://terahaku.jp/wp-content/uploads/2019/07/bff1bc015f5844760e7be652aea34d66-1024x679.jpg" alt="" width="90%" height="90%">
                    </div>
                    <h6 class="sushi_name">比叡山 延暦寺会館</h6>
                    <h6 class="sushi_rating">滋賀県大津市</h6>
                    <h6 class="sushi_rating">カード支払可能</h6>
                    <h6 class="sushi_price">JPY 22,000~</h6>
                </li>
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                    <img src="https://urashimavillage.com/img/nav_04.jpg" alt="" width="90%" height="90%">
                    </div>
                    <h6 class="sushi_name">URASHIMA VILLAGE</h6>
                    <h6 class="sushi_rating">香川県三豊市<h3>
                    <h6 class="sushi_rating">カード支払可能</h6>
                    <h6 class="sushi_price">JPY 12,650~</h6>
                </li>
            </ul>
            <div>
            <a href="hotel.php" class="btn">More</a>
            </div>
        </div>


        <div class="sauna">
            <div class="sauna_title">
            <a href="sauna.php">温泉・サウナ</a>
            </div>
            <ul class="sushi_list">
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                        <img src="https://img.sauna-ikitai.com/sauna/9546_20200929_203317_qfk0JbAzWG_large.jpg" alt="" width="90%" height="90%">
                    </div>
                    <h6 class="sushi_name">	多摩境天然温泉 森乃彩</h6>
                    <h6 class="sushi_rating">東京都 町田市</h6>
                    <h6 class="sushi_payment">カード支払可能</h6>
                    <h6 class="sushi_price">平日780円 土日祝930円</h6>
                </li>
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                    <img src="https://img.sauna-ikitai.com/sauna/1722_20220428_151910_BnLkkIUAyV_large.jpg" alt="" width="90%" height="90%">
                    </div>
                    <h6 class="sushi_name">サウナ&カプセルホテル レインボー新小岩店</h6>
                    <h6 class="sushi_rating">東京都 葛飾区</h6>
                    <h6 class="sushi_rating">カード支払可能</h6>
                    <h6 class="sushi_price">2,300円</h6>
                </li>
                <li class="sushi_item">
                    <div class="sushi_eyecatch">
                    <img src="https://img.sauna-ikitai.com/sauna/1601_20211224_125242_6NVr4XcOkz_large.jpg" alt="" width="90%" height="90%">
                    </div>
                    <h6 class="sushi_name">前野原温泉 さやの湯処</h6>
                    <h6 class="sushi_rating">東京都 板橋区<h3>
                    <h6 class="sushi_rating">カード支払可能</h6>
                    <h6 class="sushi_price">平日：890円 土/日/祝日：1,120円</h6>
                </li>
            </ul>
            <div>
            <a href="sauna.php" class="btn">More</a>
            </div>
        </div>
        </div>
        <!-- Main[End] -->
        <footer class="footer">
            <small class="copyrights">
            copyrights 2022 Find What Japanese Do All Rights Reserved.
            </small>
        </footer>

    </body>
</html>