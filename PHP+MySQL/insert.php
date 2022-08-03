<?php
$conn = mysqli_connect("127.0.0.1", "root", "<password>", "opentutorials", "3307");
$sql = "
  INSERT INTO topic (
    title,
    description,
    created
  ) VALUES(
    '이유찬',
    '이유찬 is..',
    NOW()
    )";
echo $sql;
$result = mysqli_query($conn, $sql);
if($result == false){
    echo mysqli_error($conn);
}
?>
