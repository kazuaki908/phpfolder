<?php require'header.php'; ?>
<body>

<!-- ぱんくず -->
<div class="breadCrumb">
        <nav>
            <ul>
                <li><a href="../index.php">Top</a></li>
                <div class="navArrow">＞</div>
                <li><a href="products.php">商品一覧</a></li>
                <div class="navArrow">＞</div>
                <li>CCドーナツ 当店オリジナル(5個入り)</li>
            </ul>
        </nav>
</div>

   <p class="text" id="text">ようこそ　ゲスト様</p>



   <img class="productImg" src="images/spSubImage4.png" alt="ランキング画像1">
    <div class="productTitle">
        <h1>CCドーナツ 当店オリジナル(5個入り)</h1>
   </div>

   <p class="productsolid"></p>

   <p class="productText">当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけのよい食感が感じられます。</p>

   <p class="productsolid"></p>

   <p class="productprice">税込み ￥1,500</p>

   <form action="process.php" method="POST">
        <input type="number" id="quantity" name="quantity" min="1" required><span>個</span>
        <input type="submit" value="カートに入れる">
        <button type="button" class="likeButton">
            <svg class="likeButton__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M91.6 13A28.7 28.7 0 0 0 51 13l-1 1-1-1A28.7 28.7 0 0 0 8.4 53.8l1 1L50 95.3l40.5-40.6 1-1a28.6 28.6 0 0 0 0-40.6z"/></svg>
        </button>
    </form>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>

</body>

<?php require'footer.php'; ?>