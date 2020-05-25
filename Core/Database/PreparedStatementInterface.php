<?php

namespace Core\Database;


interface PreparedStatementInterface
{
    public function execute(array $params = []):ResultSetInterface;
}
