<?php
$conn = mysqli_connect("127.0.0.1", "root", "dbstoWkd", "Dice", "3307");

//sql filter
$filtered = array(
  'author_id' => mysqli_real_escape_string($conn, $_POST['author_id']),
  'r1' => mysqli_real_escape_string($conn, $_POST['r1'])

);

//sql injection
$sql = "
  INSERT INTO dice_1
    (user, dice1, created)
    VALUES(
      '{$filtered['author_id']}',
      '{$filtered['r1']}',

      now()
    )
";

$result = mysqli_query($conn, $sql);

if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="dice1.php">돌아가기</a>';
  header('Location: /dice\dice1.php');
}


?>
