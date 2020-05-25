<?php

namespace Core\Database;


use PDOStatement;

class PreparedStatement implements PreparedStatementInterface
{
    private PDOStatement $PDOStatement;

    public function __construct(PDOStatement $stmt)
    {
        $this->PDOStatement = $stmt;
    }

    public function execute(array $params = []): ResultSetInterface
    {
        $this->PDOStatement->execute($params);

        return new ResultSet($this->PDOStatement);
    }
}
