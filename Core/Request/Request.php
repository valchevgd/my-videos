<?php


namespace Core\Request;


abstract class Request
{
    protected array $params;

    public function all(): array
    {
        return $this->params;
    }

    public function input(string $name): ?string
    {
        return $this->params[$name] ?? null;
    }

    abstract protected function validate(array $data): array ;

}
