<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');

?>
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
        <h1><a href="index.php">Macrobi</a></h1>
        <nav id="top-nav">
        <ul>
            <li><a href="">ユーザー登録</a></li>
            <li><a href="login.php">ログイン</a></li>
        </ul>
        </nav>
    </header>

    <main class="main">
      <section class="form-container">
        <h1 class="form-title">ログイン</h1>
        <form action="" method="post" class="form">
          <label>
            メールアドレス
            <input type="text" name="email" placeholder="Email" value="">
            <span class="area-msg"></span>
          </label>
          <label>
            パスワード
            <input type="password" name="pass" placeholder="パスワード">
            <span class="area-msg"></span>
          </label>
          <button type="submit" class="btn">ログイン</button>
        </form>
      </section>
    </main>

    <footer class="footer">Copyright Macrobi. All Right Reserved.</footer>
</body>
</html>