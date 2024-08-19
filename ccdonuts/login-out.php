<?php require'header.php'; ?>

<div class="breadCrumb">
        <nav>
            <ul>
                <li><a href="../index.php">Top</a></li>
                <div class="navArrow">＞</div>
                <li><a href="../login.php">ログイン</a></li>
                <div class="navArrow">＞</div>
                <li>ログイン完了</li>
            </ul>
        </nav>
</div>

    <p>ドーナツ太郎様</p>

    <?php
        session_start();
        $mail = $_POST['mail'];
        $dsn = "mysql:host=localhost; dbname=xxx; charset=utf8";
        $username = "123@gmail.com";
        $password = "123456";
        try {
            $dbh = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            $msg = $e->getMessage();
        }

        $sql = "SELECT * FROM users WHERE mail = :mail";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':mail', $mail);
        $stmt->execute();
        $member = $stmt->fetch();
        //指定したハッシュがパスワードにマッチしているかチェック
        if (password_verify($_POST['pass'], $member['pass'])) {
            //DBのユーザー情報をセッションに保存
            $_SESSION['id'] = $member['id'];
            $_SESSION['name'] = $member['name'];
            $msg = 'ログインしました。';
            $link = '<a href="index.php">ホーム</a>';
        } else {
            $msg = 'メールアドレスもしくはパスワードが間違っています。';
            $link = '<a href="login.php">戻る</a>';
        }
    ?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
    
    <div class="loginContainer">

            <div class="loginSccessTitle">
                <h1>ログイン</h1>
            </div>
        <div class="loginMessage">
            <p>ログインが完了しました。</p>
            <p>引き続きお楽しみください。</p>
        </div>
        <div class="loginBefore" >
            <div class="loginAther">
                <a href="purchase_confirm.php"  style="margin-top: 10px; align-self: flex-end;">購入確認ページへ進む</a>
                <a href="index.php"  style="margin-top: 10px; align-self: flex-end;">TOPページへ戻る</a>
            </div>
        </div>
    </div>


 



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>

</body>

<?php require'footer.php'; ?>