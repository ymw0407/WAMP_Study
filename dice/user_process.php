<?php
$conn = mysqli_connect("127.0.0.1", "root", "dbstoWkd", "Dice", "3307");

//sql filter
$filtered = array(
  'user' => mysqli_real_escape_string($conn, $_POST['user'])
);

//sql injection
$sql = "
  INSERT INTO author
    (user)
    VALUE(
      '{$filtered['user']}'
    )
";

$result = mysqli_query($conn, $sql);

if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="user.php">돌아가기</a>';
  header('Location: /dice\user.php');
}


?>
