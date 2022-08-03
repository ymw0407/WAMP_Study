<?php
$table = "dice_1";
require_once('lib/main_lib.php');

//random integer
$r1 = random_int(1,6);


?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>주사위</title>
    <link rel="stylesheet" href="dice.css">
  </head>

  <script>
      var audio = new Audio('sounds/dice_sound.mp3');
  </script>

  <body>

    <?php require_once('lib/dice_nav.php'); ?>

    <div class="content">
      <h3>주사위(1개)</h3>
      <p>버튼을 클릭하면 1개의 주사위가 랜덤됩니다.<br><br></p>
      <div class="dice_img"><?=dice_img_1($row_dice['dice1']);?></div>
      <br><br>
      <form action="dice1_process.php" method="POST">
          <?=$select_form?>
          <input type="hidden" value="<?=$r1?>" name="r1">


          <p><input type="submit" onclick="audio.play();"></p>
      </form>
    </div>
  </body>
</html>
