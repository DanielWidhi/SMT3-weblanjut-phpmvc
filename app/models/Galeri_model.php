<?php
class Produk_model {
   private $dbh; //database handler
   private $stmt;

public function __construct () {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=galeri';
    
    try {
        $this->dbh = new PDO($dsn, 'root', '');
    } catch (PDOException $e) {
        die ($e->getMessage());
    }
}

    public function getAllgaleri () {
        $this->stmt = $this->dbh->prepare('SELECT * FROM foto');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}