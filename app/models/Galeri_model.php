<?php
class Galeri_model
{
    private $dbh; // Database handler
    private $stmt; // Statement

    public function __construct()
    {
        // Data source name
        $dsn = 'mysql:host=localhost;dbname=galeri';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllGaleri(): array
    {
        $this->stmt = $this->dbh->prepare("SELECT * FROM foto");
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // details
    public function getPhotosByEventAndRole($eventId, $roleName)
    {
        $query = "
            SELECT photos.photo_url
            FROM photos
            JOIN events ON photos.event_id = events.id
            JOIN roles ON photos.role_id = roles.id
            WHERE events.id = :event_id AND roles.name = :role_name
            ORDER BY events.date DESC
        ";

        // Siapkan query
        $this->stmt = $this->dbh->prepare($query);

        // Bind parameter
        $this->stmt->bindParam(':event_id', $eventId, PDO::PARAM_INT);
        $this->stmt->bindParam(':role_name', $roleName, PDO::PARAM_STR);

        // Eksekusi query
        $this->stmt->execute();

        // Ambil hasil
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
