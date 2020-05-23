<?php


namespace Controllers;


use ViewEngine\ViewInterface;

class ErrorController
{
    private ViewInterface $view;

    /**
     * ErrorController constructor.
     * @param ViewInterface $view
     */
    public function __construct(ViewInterface $view)
    {
        $this->view = $view;
    }

    public function index()
    {
        $this->view->render('error/index');
    }
}
