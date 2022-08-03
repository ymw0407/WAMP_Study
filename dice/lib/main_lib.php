<?php
$conn = mysqli_connect("127.0.0.1", "root", "dbstoWkd", "Dice", "3307");

//sql author
$sql_author = "SELECT * FROM author";
$result_author = mysqli_query($conn, $sql_author);
$select_form = '<select name="author_id">';
while($row = mysqli_fetch_array($result_author)) {
  $select_form .= '<option value="'.$row['user'].'">'.$row['user'].'</option>';
}
$select_form .= '</select>';

$sql_main = "SELECT * FROM $table order by id desc";
$result_main = mysqli_query($conn, $sql_main);
$row_dice = mysqli_fetch_array($result_main);

//function definition




function dice_img_1($arg1 = 1){
  echo "<img src='images/d".$arg1.".png'>";
}

function dice_img_2($arg1 = 1, $arg2 = 1){
  echo "<img src='images/d".$arg1.".png'>";
  echo "&nbsp;";
  echo "<img src=\"images/d".$arg2.".png\">";
}

function dice_img_3($arg1 = 1, $arg2 = 1, $arg3 = 1){
  echo "<img id='dice3' src='images/d".$arg1.".png'>";
  echo "&nbsp;";
  echo "<img id='dice3' src=\"images/d".$arg2.".png\">";
  echo "<br>";
  echo "<img id='dice3' src=\"images/d".$arg3.".png\">";
}

?>
