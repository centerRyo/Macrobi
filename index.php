<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Macrobi</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic|Sigmar+One&display=swap" rel="stylesheet">
</head>
<body>
    <header class="header site-width">
        <h1><a href="">Macrobi</a></h1>
        <nav id="top-nav">
        <ul>
            <li><a href="index.php">TOP</a></li>
            <li><a href="#concept">CONCEPT</a></li>
            <li><a href="#menu">MENU</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
        </nav>
    </header>

    <main class="main">
        <img class="top-img" src="images/food-3270461_1920.jpg" alt="ヒーローバナー">
        <section id="concept" class="site-width">
            <h1 class="title">CONCEPT</h1>
            <p>みんなでおいしく</p>
            <p>みんなが楽しく、笑顔になれる</p>
            <p>"Macrobi"スタイルの</p>
            <p>カラダにやさしいお料理</p>
            <p>世界中に笑顔の輪を広げます。</p>
            <p>やさしくおいしいヴィーガンフードを味わいながら大切な方とゆっくりお過ごし下さい。</p>
            <section>
                We use plenty of vegetables, soy meat and soy milk,<br>
                and are paticular about good taste.<br>
                As various food culture exist, we would like you to enjoy<br>
                a new style of eating.<br>
                which allows all people to enjoy eating together.
            </section>
        </section>

        <section id="menu" class="site-width">
            <h1 class="title">MENU</h1>
            <section class="menu__panel">
                <h2 class="menu__title">LUNCH MENU</h2>
                <img src="images/menu1.jpeg" alt="">
                <p>● 2ディッシュコンボ（デリから2種+玄米orピタパン）</p>
                <p>● 3ディッシュコンボ（デリから3種+玄米orピタパン）</p>
                <p>など</p>
                <p><a href="">詳しくはこちら</a></p>
            </section>
            <section class="menu__panel">
                <h2 class="menu__title">DINNER MENU</h2>
                <img src="images/menu2.jpg" alt="">
                <p>● BEAST BURGER</p>
                <p>● ビーガンハンバーグ</p>
                <p>など</p>
                <p><a href="">詳しくはこちら</a></p>
            </section>
            <section class="menu__panel">
                <h2 class="menu__title">DRINK MENU</h2>
                <img src="images/menu3.jpg" alt="">
                <p>● キリン　ハートランド</p>
                <p>● マス・ド・ジャニーニ</p>
                <p>など</p>
                <p><a href="">詳しくはこちら</a></p>
            </section>
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
                        <label>お名前<span class="required">必須</span>
                        </label>
                        <input class="js-valid-text" type="text" name="name" placeholder="例)山田太郎" value="">
                        <span class="area-msg"></span>
                    </div>
                    <div class="contact__list">
                        <label>メールアドレス<span class="required">必須</span></label>
                        <input class="js-valid-email" type="text" name="email" placeholder="a@aaa.com" value="">
                        <span class="area-msg"></span>
                    </div>
                    <div class="contact__list">
                        <label>電話番号<span class="option">任意</span></label>
                        <input class="js-format-number" type="text" name="phone" placeholder="080-1111-2222" value="">
                        <span class="area-msg"></span>
                    </div>
                    <div class="contact__list">
                        <label>お問い合わせ内容<span class="required">必須</span></label>
                        <textarea name="comment" class="js-count-text js-valid-comment" placeholder="お問い合わせ内容を入力"></textarea>
                        <span class="counter-container"><span class="js-show-count-text">0</span>/200</span>
                        <span class="area-msg_textarea"></span>
                    </div>
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