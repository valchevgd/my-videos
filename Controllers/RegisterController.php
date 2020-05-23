<?php


namespace Controllers;


use ViewEngine\ViewInterface;

class RegisterController
{
    private ViewInterface $viewInterface;

    public function __construct(ViewInterface $viewInterface)
    {
        $this->viewInterface = $viewInterface;
    }

    public function index()
    {
        $this->viewInterface->render('register/index');
    }
}
