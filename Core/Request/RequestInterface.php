<?php


namespace Core\Request;


interface RequestInterface
{
    public function all(): array ;
    public function input(string $name): ?string ;
}
