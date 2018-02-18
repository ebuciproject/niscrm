<?php require_once 'scripts/connect.php'; ?>
<?php if(isset($_SESSION['logged_user'])) : ?>
<?php header("Location: /person/send/"); ?>
<?php else : ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Система Управления Образованием</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="POST" action="scripts/login.php">
        <img src="img/logo.png" alt="nis logo" class="logo-img">
        <span>система управления образованием</span>
        <p class="error"></p>
        <input type="text" placeholder="username" name="login" class="login"/>
        <input type="password" placeholder="password" name="password" class="password"/>
        <label for="remember"><input type="checkbox" name="remember" id="remember" class="remember" value="yes">Запомнить меня</label>
        <button>Вход</button>
      </form>
    </div>
  </div>
  <div class="popup-overlay"></div>
  <div class="popup">
    <div class="object">
      <h2></h2>
    </div>
  </div>
  <div class="login-script"></div>
  <script src="libs/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
<?php endif; ?>