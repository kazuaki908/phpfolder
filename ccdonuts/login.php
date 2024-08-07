<?php require'header.php'; ?>
<body>

<!-- ぱんくず -->
<div class="breadCrumb">
        <nav>
            <ul>
                <li><a href="index.php">Top</a></li>
                <div class="navArrow">＞</div>
                <li>ログイン</li>
            </ul>
        </nav>
</div>

    <p>ようこそゲスト様</p>

    <div class="parent">
        <div class="loginTitle">
            <h1>ログイン</h1>
        </div>
    </div>
    
    <div class="loginText">

        <form action="login.php" method="post" class="login-form">
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="ログイン">

    </div>
        
    <div class="loginBefore">
            <a href="createAccount.php" style="margin-top: 10px; align-self: flex-end;">会員登録はこちら</a>
        </form>

        <?php if ($success_message): ?>
            <p style="color: green;"><?php echo $success_message; ?></p>
        <?php endif; ?>

        <?php if ($error_message): ?>
            <p style="color: red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

    </div>


 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="scripts/script.js"></script>

</body>

<?php require'footer.php'; ?>