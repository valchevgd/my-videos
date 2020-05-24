<?php


namespace Core\Http\Response;


interface ResponseInterface
{
    public function redirect(string $url): void;
}
