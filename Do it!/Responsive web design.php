<?php
function print_title(){
  if(isset($_GET['id'])){
    echo "<h2>".$_GET['id']."</h2>";
    }
  else {
    echo "<h2>반응형 웹 만들기 공부~!</h2><br><br><br><br><br>";
    }
}

function print_description(){
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo file_get_contents("data/".$basename);
    }
}

function print_list(){
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<ol class=\"ol\"><a href=\"Responsive web design.php?id=$list[$i]\" class=\"ol font highlight\">$list[$i]</a></ol>";
        }
    }
      $i = $i + 1;
  }
}

?>

<!DOCTYPE html>
<html lang="ko" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="description" content="나만의 공부 기록 공간!">
    <meta name="author" content="윤민우">
    <link rel="stylesheet" href="index.css">
    <title>Do it! 반응형 웹 페이지 만들기</title>
  </head>

  <body>

    <div class="title">
      <h1><a href="Responsive web design.php" class="none_deco">반응형 웹 페이지 만들기</a></h1>
    </div>


    <div id="grid">

      <div id="list">
        <?php
        print_list();
        ?>
      </div>

      <div id="content">
        <?php
        print_title();
        print_description();
        ?>
      </div>


    </div>


  </body>
</html>
