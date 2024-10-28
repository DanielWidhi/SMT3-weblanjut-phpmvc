<?php

class Input_model
{
    private $dbh;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';
        try {
            $this->dbh = new PDO($dsn, 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function tambahBuku($judul, $sinopsis, $image)
    {
        $sql = "INSERT INTO buku (judul, sinopsis, image) VALUES (:judul, :sinopsis, :image)";
        $stmt = $this->dbh->prepare($sql);

        return $stmt->execute(
            [
                ':judul' => $judul,
                ':sinopsis' => $sinopsis,
                ':image' => $image,
            ]
        );
    }

}
