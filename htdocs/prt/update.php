<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])) { ?>
      <a href="update.php?id=<?=$_GET['id']?>">update</a>
      <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="delete">
      </form>
    <?php } ?>

      <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
        <p>
          <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
        </p>
        <p>
          <textarea name="description" rows="8" cols="80" placeholder="Description"><?php print_description(); ?></textarea>
        </p>
          <input type="submit" name="제출">
      </form>
<?php
require_once('view/bottom.php');
?>
