<?php require 'functions.php'; ?>
<?php

if($_SERVER['REQUEST_METHOD'] === 'GET') {
  if($_GET['newpage']) {
    $Pages->addNew($_GET['title'], $_GET['name'], $_GET['url'], $_GET['rights'], $_GET['icon']);
  }
}

if($_SERVER['REQUEST_METHOD'] === 'POST') {

}

?>
