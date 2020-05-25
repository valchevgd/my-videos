<?php

namespace Core\Database;


use PDO;

class PDODatabase implements DatabaseInterface
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    public function query(string $query): PreparedStatementInterface
    {
        $stmt = $this->pdo->prepare($query);

        return new PDOPreparedStatement($stmt);
    }
}
