<?php require'header.php'; ?>
<body>

<!-- ぱんくず -->
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