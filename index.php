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
        <img class="top-img" src="images/salad.jpg" alt="ヒーローバナー">
        <section id="about" class="site-width">
            <h1 class="title">ABOUT</h1>
            <p>
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
        <section class="site-width">
            <h1>新規登録は<a href="signup.php">こちら</a>から</h1>
            <h1>ログインは<a href="login.php">こちら</a>から</h1>
        </section>
        <section class="site-width">
            <form method="post">
                <h1 class="title">CONTACT</h1>
                <table>
                        <tr>
                            <th>お名前</th>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>メールアドレス</th>
                            <td><input type="text" name="email"></td>
                        </tr>
                        <tr>
                            <th>お問い合わせ内容</th>
                            <td><textarea name="comment"></textarea></td>
                        </tr>
                </table>
                <input type="submit" value="送信する">
            </form>
        </section>
    </main>

    <footer class="footer">CopyRight Macrobi. All Right Reserved.</footer>
</body>
</html>