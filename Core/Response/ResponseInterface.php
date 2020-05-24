<?php


namespace Core\Response;


interface ResponseInterface
{
    public function redirect(string $url): void;
}
