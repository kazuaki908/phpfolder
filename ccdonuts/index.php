<?php require'header.php'; ?>

<body>

   <p class="text">ようこそ　ゲスト様</p>

    <div class="spImage">
        <img id="mainImg1" src="images/spMainImage1.png" alt="メイン画像" class="mainImg1">
   </div>
   <div class="pcImage">
        <img id="mainImg1" src="images/pcMainImage1.png" alt="メイン画像" class="mainImg1">
   </div>

   <div class="container">
        <div class="column">
             <p class="prText">新商品</p>
            <div class="spImage">
                <img id="subImg1" src="images/spSubImage1.png" alt="サブ画像" class="subImg">
                <img id="subImg2" src="images/spSubImage2.png" alt="サブ画像" class="subImg">
            </div>
            <div class="pcImage">
                <img id="subImg1" src="images/pcSubImage1.png" alt="サブ画像" class="subImg">
                <img id="subImg2" src="images/pcSubImage2.png" alt="サブ画像" class="subImg">
            </div>
        </div>
   </div>

   <div class="spImage">
        <img id="subImg3" src="images/spSubImage3.png" alt="サブ画像" class="subImg3">
    </div>

    <div class="pcImage">
        <img id="subImg3" src="images/pcSubImage3.png" alt="サブ画像" class="subImg3">
    </div>
   
 

    <div class="mainImg2">
        <h1>Philosophy</h1>
        <h2>私たちの信念</h2>
        <h3>"Creating Connections"</h3>
        <h4>「ドーナツでつながる」</h4>
    </div>


    <!-- ランキング -->

        <div class="h5">
        <h5 class="underline">人気ランキング</h5>
        </div>

        <div class="rankingContainer">
            <div class="rankingItem">
                <p id="no1">1</p>
                <img src="images/spSubImage4.png" alt="ランキング画像1">
                <a class="rankingText" href="productDetails1.php">CCドーナツ 当店オリジナル (5個入り)</a>

                <p class="price">税込み ￥1,500</p>
                <button><p>カートに入れる</p></button>
            </div>

            <div class="rankingItem">
                <p id="no2">2</p>
                <img src="images/spSubImage5.png" alt="ランキング画像2">
                <a class="rankingText" href="#">フルーツドーナツセット (12個入り)</a>

                <p class="price">税込み ￥3,500</p>
                <button><p>カートに入れる</p></button>
            </div>

            <div class="rankingItem">
                <p id="no3">3</p>
                <img src="images/spSubImage6.png" alt="ランキング画像3">
                <a class="rankingText" href="#">フルーツドーナツセット (14個入り)</a>

                <p class="price">税込み ￥4,000</p>
                <button><p>カートに入れる</p></button>
            </div>

            <div class="rankingItem">
                <p id="no4">4</p>
                <img src="images/spSubImage7.png" alt="ランキング画像4">
                <a class="rankingText" href="#">チョコレートデライト (5個入り)</a>

                <p class="price">税込み ￥1,600</p>
                <button><p>カートに入れる</p></button>
            </div>
            
            <div class="rankingItem">
                <p id="no5">5</p>
                <img src="images/spSubImage8.png" alt="ランキング画像5">
                <a class="rankingText" href="#">ベストセレクションボックス (4個入り)</a>

                <p class="price">税込み ￥1,200</p>
                <button><p>カートに入れる</p></button>
            </div>

            <div class="rankingItem">
                <p id="no6">6</p>
                <img src="images/spSubImage9.png" alt="ランキング画像6">
                <a class="rankingText" href="#">ストロベリークラッシュ (5個入り)</a>

                <p class="price">税込み ￥1,800</p>
                <button><p>カートに入れる</p></button>
            </div>

        </div>


   

   

</body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>

<?php require'footer.php'; ?>