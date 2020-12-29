<?php
class Barang{
    private $mysqli;

    function __construct($conn){
        $this->mysqli = $conn;
    }

    public function tampil()
    {
        $db = $this->mysqli->conn;
        $sql = 'SELECT * FROM tb_barang';
        $query = $db->query($sql) or die ($db->error);
        return $query;
    }
}
