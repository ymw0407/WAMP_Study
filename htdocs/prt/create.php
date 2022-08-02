<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="prt.php">create</a>
    <a href="update.php">update</a>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" rows="8" cols="80" placeholder="Description"></textarea>
      </p>
        <input type="submit" name="제출">
    </form>
<?php
require_once('view/bottom.php');
?>
