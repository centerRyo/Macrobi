<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');

  if (!empty($_POST)) {
    define('MSG01', '入力必須です');
    define('MSG02', 'Emailの形式で入力して下さい');
    define('MSG03', '半角英数字のみご利用いただけます');
    define('MSG04', 'パスワード(再入力)が一致しません');
    define('MSG05', '6文字以上で入力して下さい');

    $err_msg = [];

    if (empty($_POST['email'])) {
      $err_msg['email'] = MSG01;
    }

    if (empty($_POST['pass'])) {
      $err_msg['pass'] = MSG01;
    }

    if (empty($_POST['pass_re'])) {
      $err_msg['pass_re'] = MSG01;
    }

    if (empty($err_msg)) {
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $pass_re = $_POST['pass_re'];

      if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\?\*\[|\]%'=~^\{\}\/\+!#&\$\._-])*@([a-zA-Z0-9_-])+\.([a-zA-Z0-9\._-]+)+$/", $email)) {
        $err_msg['email'] = MSG02;
      }

      if ($pass !== $pass_re) {
        $err_msg['pass'] = MSG04;
      }

      if (empty($err_msg)) {
        if (!preg_match("/^[a-zA-Z0-9]+$/", $pass)) {
          $err_msg['pass'] = MSG03;
        }

        if (mb_strlen($pass) < 6) {
          $err_msg['pass'] = MSG05;
        }

        if (empty($err_msg)) {
          $dsn = 'mysql:dbname=macrobi;host=localhost;charset=utf8';
          $user = 'root';
          $password = 'root';
          $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
          );

          $dbh = new PDO($dsn, $user, $password, $options);
          $stmt = $dbh->prepare('INSERT INTO users(email, password, created_at) VALUES (:email, :pass, :created_at)');
          $stmt->execute(array(':email' => $email, ':pass' => $pass, ':created_at' => date('Y-m-d H:i:s')));

          header("Location:mypage.php");
        }
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
        <h1 class="form-title">新規登録</h1>
        <form action="" method="post" class="form">
          <label>
            メールアドレス
            <input type="text" name="email" placeholder="Email" value="<?php if(!empty($_POST['email'])) echo $_POST['email'] ?>">
            <span class="area-msg"><?php if(!empty($err_msg['email'])) echo $err_msg['email']; ?></span>
          </label>
          <label>
            パスワード(半角英数字6文字以上)
            <input type="password" name="pass" placeholder="パスワード">
            <span class="area-msg"><?php if(!empty($err_msg['pass'])) echo $err_msg['pass']; ?></span>
          </label>
          <label>
            パスワード(再入力)
            <input type="password" name="pass_re">
            <span class="area-msg"><?php if(!empty($err_msg['pass_re'])) echo $err_msg['pass_re']; ?></span>
          </label>
          <button type="submit" class="btn">登録する</button>
        </form>
      </section>
    </main>

    <footer class="footer">Copyright Macrobi. All Right Reserved.</footer>
</body>
</html>