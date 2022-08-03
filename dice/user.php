<!DOCTYPE html>
<html lang="ko" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>주사위</title>
    <link rel="stylesheet" href="dice.css">
  </head>

  <body>

    <?php require_once('lib/dice_nav.php'); ?>

    <div class="content">
      <h3>사용자 추가</h3>
      <p>사용자에 자신의 이름을 추가할 수 있다.</p>
      <form action="user_process.php" method="POST">
          <p><input type="text" name="user" placeholder="사용자 추가(최대 20자)"></p>
          <p><input type="submit"></p>
      </form>
    </div>
  </body>
</html>
