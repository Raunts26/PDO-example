<?php
class Pages {

    private $connection;

    function __construct($connection){
        $this->connection = $connection;
    }

    function addNew() {
      $stmt = $this->connection->prepare('INSERT INTO pages (title, name, url, rights) VALUES (:title, :name, :url, :rights)');
      $stmt->execute(array(
          "title" => "Test lehekülg",
          "name" => "Test lehekülg nimi",
          "url" => "test.php",
          "rights" => "testin"
      ));
    }

    function getAll() {
      $stmt = $this->connection->prepare('SELECT * FROM pages');
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);
      return $result;
    }

    function getCurrent() {
      //$url = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
      $stmt = $this->connection->prepare('SELECT * FROM pages WHERE url = :url');
      $stmt->execute(array(
        "url" => basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])
      ));
      $result = $stmt->fetchObject();
      return $result;
    }



  }

 ?>
