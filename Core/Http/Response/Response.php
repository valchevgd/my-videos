<?php


namespace Core\Http\Response;


class Response implements ResponseInterface
{

    public function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }
}
