<?php
function print_title(){
  if(isset($_GET['id'])){
    echo htmlspecialchars($_GET['id']);
    }
  else {
    echo "Welcome";
    }
}

function print_description() {
  if(isset($_GET['id'])){
    $basename = basename($_GET['id']);
    echo htmlspecialchars(file_get_contents("data/".$basename));
    }
}

function print_list() {
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    $Llist = htmlspecialchars($list[$i]);
    if($list[$i] != '.') {
        if($list[$i] != '..') {
          echo "<li><a href=\"prt.php?id=$Llist\">$Llist</a></li>\n";
        }
    }
      $i = $i + 1;
  }
}
?>
