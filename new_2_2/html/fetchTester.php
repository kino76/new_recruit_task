<?php
require_once 'database.php';

class FetchTester
{
    private $pdo;

    function __construct()
    {
        $this->pdo = Database::connectDB();
    }

    public function fetch($table)
    {
        $stmt = $this->selectTable($table);
        while($row = $stmt->fetch()) {
            var_dump($row);
        }
    }

    private function selectTable($table)
    {
        $sql = 'SELECT * FROM ' . $table;
        $stmt = $this->pdo->query($sql);
        return $stmt;
    }
}