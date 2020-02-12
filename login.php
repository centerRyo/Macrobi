<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');

  if (!empty($_POST)) {
      define('MSG01', '入力必須です');
      define('MSG02', 'メールアドレスまたはパスワードが間違っています');

      $err_msg = [];

      if (empty($_POST['email'])) {
          $err_msg['email'] = MSG01;
      }

      if (empty($_POST['pass'])) {
          $err_msg['pass'] = MSG01;
      }

      if (empty($err_msg)) {
          $email = $_POST['email'];
          $pass = $_POST['pass'];

          $dsn = 'mysql:dbname=macrobi;host=localhost;charset=utf8';
          $user = 'root';
          $password = 'root';
          $options = array(
              PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
          );

          $dbh = new PDO($dsn, $user, $password, $options);
          $stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email AND password = :pass');
          $stmt->execute(array(':email' => $email, ':pass' => $pass));

          $result = 0;
          $result = $stmt->fetch(PDO::FETCH_ASSOC);

          if (!empty($result)) {
              session_start();
              $_SESSION['login'] = true;

              header("Location:mypage.php");
          } else {
              $err_msg['common'] = MSG02;
          }
      }
  }

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
        <span class="area-msg"><?php if(!empty($err_msg['common'])) echo $err_msg['common']; ?></span>
          <label>
            メールアドレス
            <input type="text" name="email" placeholder="Email" value="<?php if(!empty($_POST['email'])) echo $_POST['email']; ?>">
          </label>
          <label>
            パスワード
            <input type="password" name="pass" placeholder="パスワード">
          </label>
          <button type="submit" class="btn">ログイン</button>
        </form>
      </section>
    </main>

    <footer class="footer">Copyright Macrobi. All Right Reserved.</footer>
</body>
</html>