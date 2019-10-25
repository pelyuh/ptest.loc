<?php


class QueryBuilder
{
    public function __construct(PDO $pdo)
    {
        $this->db = $pdo;
    }

    public function select($table)
    {
        $select = $this->db->query("SELECT * FROM $table");
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}