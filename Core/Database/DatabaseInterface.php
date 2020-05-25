<?php

namespace Core\Database;


interface DatabaseInterface
{
    public function query(string $query):PreparedStatementInterface;
}
