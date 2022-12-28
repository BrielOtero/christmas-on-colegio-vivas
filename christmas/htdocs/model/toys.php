<?php
require_once 'db.php';

class Toys
{
    private $table = 'toys';
    private $connection;


    public function getConnection()
    {
        $dbObj = new Db();
        $this->connection = $dbObj->connection;
    }

    public function getToys()
    {
        $this->getConnection();
        return mysqli_query($this->connection, "SELECT * FROM " . $this->table);
    }

    public function addToy($name, $description, $image)
    {
        $this->getConnection();

        $query = "INSERT INTO " . $this->table . " (id,name,description,image) VALUES (0,'$name','$description','$image')";
        mysqli_query($this->connection, $query);
    }
}

?>
