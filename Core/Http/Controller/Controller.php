<?php


namespace Core\Http\Controller;


use Core\Http\Response\ResponseInterface;
use Core\ViewEngine\ViewInterface;

abstract class Controller
{

    protected ViewInterface $view;
    protected ResponseInterface $response;

    public function __construct(ViewInterface $view, ResponseInterface $response)
    {
        $this->view = $view;
        $this->response = $response;
    }


}
