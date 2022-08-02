<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /prt\prt.php?id='.$_POST['title']);
?>
