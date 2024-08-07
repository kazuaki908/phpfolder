<?php require'header.php'; ?>

<link rel="stylesheet" href="styles/styles.css">

<body>

<!-- ぱんくず -->
    <div class="breadCrumb">
            <nav>
                <ul>
                    <li><a href="index.php">Top</a></li>
                    <div class="navArrow">＞</div>
                    <li><a href="login.php">ログイン</a></li>
                    <div class="navArrow">＞</div>
                    <li>会員登録</li>
                </ul>
            </nav>
    </div>  

    <p>ようこそ　ゲスト様   </p>


    <div class="loginSccessTitle">
        <h1>ログイン</h1>
    </div>


    <div class="loginSccessContainer">
    <form action="register.php" method="post">
        <label>
            お名前
            <input type="text" name="name" required>
        </label>

        <label>
            お名前(フリガナ)
            <input type="text" name="furigana" required>
        </label>

        <label>
            郵便番号<br>
            <input type="text" name="postal_code1" pattern="\d{3}" maxlength="3" required> - 
            <input type="text" name="postal_code2" pattern="\d{4}" maxlength="4" required>
        </label>

        <label>
            住所
            <input type="text" name="address" required>
        </label>

        <label>
            メールアドレス
            <input type="email" name="email" required>
        </label>

        <label>
            パスワード
            <input type="password" name="password" required>
        </label>

        <label>
            パスワード(確認用)
            <input type="password" name="confirm_password" required>
        </label>

        <button type="submit">入力確認する</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>

</body>

<?php require'footer.php'; ?>