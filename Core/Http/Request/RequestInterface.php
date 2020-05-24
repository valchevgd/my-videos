<?php


namespace Core\Http\Request;


interface RequestInterface
{
    public function all(): array ;
    public function input(string $name): ?string ;
}
