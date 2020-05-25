<?php


namespace Core\Database;


interface PDODatabaseInterface
{
    public function query(string $query):PreparedStatementInterface;
}
