<?php


namespace Services;


class RequestService implements RequestServiceInterface
{

    private array $params = [];

    public function __construct()
    {
        $this->params = $_POST;
    }


    public function all(): array
    {
       return $this->params;
    }
}
