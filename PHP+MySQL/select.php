<?php
$conn = mysqli_connect("127.0.0.1", "root", "dbstoWkd", "opentutorials", "3307");

//1 row
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
echo '<h1>'.$row['title'].'</h1>';
echo $row['description'];
echo "<h1>multi row</h1>";

//all row
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result)) {
  echo '<h2>'.$row['title'].'</h2>';
  echo $row['description'];
}
?>
