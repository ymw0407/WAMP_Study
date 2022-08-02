<?php
unlink('data/'.basename($_POST['id']));
header('Location: /prt\prt.php')
?>
