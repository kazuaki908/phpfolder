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
                <li>フルーツドーナツセット(12個入り)</li>
            </ul>
        </nav>
</div>

   <p class="text" id="text">ようこそ　ゲスト様</p>



   <img class="productImg" src="images/spSubImage5.png" alt="ランキング画像5">
    <div class="productTitle">
        <h1>フルーツドーナツセット(12個入り)</h1>
   </div>

   <p class="productsolid"></p>

   <p class="productText">新鮮で豊かなフルーツをたっぷりと使用した贅沢な12個入りセットです。このセットには、季節の最高のフツールを厳選し、ドーナツに取り入れました。口に入れた瞬間にフルーツの風味と生地のハーモニーが広がります。色鮮やかな見た目も魅力の一つです。</p>

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