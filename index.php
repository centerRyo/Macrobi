<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Macrobi</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="app.css">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic|Sigmar+One&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header site-width">
        <h1><a href="">Macrobi</a></h1>
        <nav id="top-nav">
        <ul>
            <li><a href="index.php">TOP</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#menu">MENU</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
        </nav>
    </header>

    <main class="main">
        <img class="top-img" src="images/food-3270461_1920.jpg" alt="ヒーローバナー">
        <section id="about" class="site-width">
            <h1 class="title">ABOUT</h1>
            <p>
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample.<br>
                sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.
            </p>
            <p>
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.
            </p>
        </section>

        <section id="menu" class="site-width">
            <h1 class="title">MENU</h1>
            <p>
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.sample text.sample text.sample text.sample text.sample text.
                sample text.sample text.sample text.
            </p>
        </section>

        <section class="site-width regist">
            <h1>新規登録は<a href="signup.php">こちら</a>から</h1>
            <h1>ログインは<a href="login.php">こちら</a>から</h1>
        </section>

        <section id="contact" class="site-width">
            <h1 class="title">CONTACT</h1>
            <form method="post">
                <section class="contact-container">
                    <div class="contact__list">
                        <label>お名前<span class="required">必須</span></label>
                        <input class="js-valid-text" type="text" name="name" placeholder="例)山田太郎" value="">
                        <span class="area-msg"></span>
                    </div>
                    <div class="contact__list">
                        <label>メールアドレス<span class="required">必須</span></label>
                        <input class="js-valid-email" type="text" name="email" placeholder="a@aaa.com" value="">
                        <span class="area-msg"></span>
                    </div>
                    <div class="contact__list">
                        <label>お問い合わせ内容<span class="required">必須</span></label>
                        <textarea name="comment" class="js-count-text js-valid-comment" placeholder="お問い合わせ内容を入力"></textarea>
                    </div>
                    <div class="counter-container"><span class="js-show-count-text">0</span>/200</div>
                    <button type="submit">送信する</button>
                </section>
            </form>
        </section>
    </main>

    <footer class="footer">Copyright Macrobi. All Right Reserved.</footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="app.js"></script>
</body>
</html>