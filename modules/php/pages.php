<?php
class Pages {

    private $connection;

    function __construct($connection){
        $this->connection = $connection;
    }

    function addNew($title, $name, $url, $rights, $icon) {
      $stmt = $this->connection->prepare('INSERT INTO pages (title, name, url, rights, weight, icon, created) VALUES (:title, :name, :url, :rights, 9999, :icon, NOW())');
      $stmt->execute(array(
          "title" => $title,
          "name" => $name,
          "url" => $url . ".php",
          "rights" => $rights,
          "icon" => $icon
      ));

      $newfile = fopen("pages/" . $url . ".php", "w") or die("Ei suutnud luua uut lehte!");
      $txt = '
      <?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php"; ?>
      <?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/sidebar.php"; ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?=$current_page->name;?>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">


      ';
      fwrite($newfile, $txt);
      $txt = '
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <?php include $_SERVER["DOCUMENT_ROOT"] . "/templates/footer.php"; ?>';
      fwrite($newfile, $txt);
      fclose($newfile);


    }

    function getAll() {
      $stmt = $this->connection->prepare('SELECT * FROM pages');
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);

      return $result;
    }

    function getCurrent() {
      $stmt = $this->connection->prepare('SELECT * FROM pages WHERE url = :url');
      $stmt->execute(array(
        "url" => basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])
      ));
      $result = $stmt->fetchObject();
      return $result;
    }



  }

 ?>
