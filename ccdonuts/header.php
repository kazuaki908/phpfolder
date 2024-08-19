<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>C.C.Donuts</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <header>


    <!-- ドロワー -->

        <div class="headerContainer">
            <button class="navButton" id="navButton">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="navigation" id="navigation">
                <div class="drawerIcon">
                    <img src="images/spLogo.png" alt="Logo" class="drawerLogo">
                    <img src="images/close.png" alt="Btn" class="drawerBto" id="closeButton">
                </div>
                <nav class="globalNav">
                    <ul>
                        <li class="top"><a href="index.php">Top</a></li>
                        <p class="solid"></p>
                        <li><a href="products.php">商品一覧</a></li>
                        <p class="solid"></p>
                        <li><a href="#">よくある質問</a></li>
                        <p class="solid"></p>
                        <li><a href="#">問い合わせ</a></li>
                        <p class="solid"></p>
                        <li class="policy"><a href="#">当サイトのポリシー</a></li>
                        <p class="solid"></p>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- ドロワーここまで -->

        <div class="mainLogo">
            <img id="Logo" src="images/spLogo.png" alt="Logo">
        </div>

        <div class="subIcon">
            <div class="login">
            <a href="login.php">
                <div class="spImage">
                    <a href="login-in.php">
                        <img id="login" src="images/loginIcon.png" alt="login" class="loginIcon"> 
                    </a>
                </div>
                <div class="pcImage">
                    <a href="login-in.php">
                        <img id="login" src="images/pcloginIcon.png" alt="login" class="loginIcon">
                    </a>
                </div>
                <p>ログイン</p>
            </a>
            </div>


            <div class="cart">
                <a href="login.php">
                    <div class="spImage">
                        <img id="cart" src="images/cartIcon.png" alt="cart" class="cartIcon">
                    </div>
                     <div class="pcImage">
                     <img id="cart" src="images/pcCart.png" alt="cart" class="cartIcon">
                    </div>
                    <p>カート</p>
                </a>
            </div>
        </div>

        <!-- 検索バー -->

        <div class="searchContainer">
            <div class="searchClumn">
                <button id="searchButton"><img class="searchButton" src="images/serchIcon.png" alt="検索"></button>
                <input type="text" id="searchInput" />
            </div>
        </div>
        <!-- 検索バーここまで -->

    <div id="searchResults"></div>



    
    
        

    </header>