<?php
require_once('lib/main_lib.php');

//sql author
$sql_author = "SELECT * FROM author";
$result_author = mysqli_query($conn, $sql_author);
$select_form = '<select name="author_id">';
while($row = mysqli_fetch_array($result_author)) {
  $select_form .= '<option value="'.$row['user'].'">'.$row['user'].'</option>';
}
$select_form .= '</select>';

//sql main
$sql_main = "SELECT * FROM dice_2 order by id desc";
$result_main = mysqli_query($conn, $sql_main);
$row_dice = mysqli_fetch_array($result_main);

//random integer
$r1 = random_int(1,6);
$r2 = random_int(1,6);


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
      <h3>주사위(2개)</h3>
      <p>버튼을 클릭하면 2개의 주사위가 랜덤됩니다.<br><br></p>
      <div class="dice_img"><?=print_img_2($row_dice['dice1'], $row_dice['dice2']);?></div>
      <br><br>
      <form action="dice2_process.php" method="POST">
          <?=$select_form?>
          <input type="hidden" value="<?=$r1?>" name="r1">
          <input type="hidden" value="<?=$r2?>" name="r2">
          <p><input type="submit" onclick="audio.play();"></p>
      </form>
    </div>
    <p><?php sql_exists(dice_2);?></p>
  </body>
</html>
