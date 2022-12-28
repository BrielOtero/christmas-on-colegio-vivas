<?php


class Letter
{
    private $table = 'letter';
    private $connection;


    public function getConnection()
    {
        $dbObj = new Db();
        $this->connection = $dbObj->connection;
    }

    public function addLetter($toys,$content,$signature)
    {
        $this->getConnection();

        $query = "INSERT INTO " . $this->table . " (id,toys,content,signature) VALUES (0,'$toys','$content','$signature')";
        mysqli_query($this->connection, $query);
    }

}

?>
