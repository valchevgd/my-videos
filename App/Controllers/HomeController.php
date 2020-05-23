<?php


namespace App\Controllers;


use App\Services\HomeServiceInterface;
use Core\ViewEngine\ViewInterface;

class HomeController
{
    private ViewInterface $view;
    private HomeServiceInterface $homeService;

    public function __construct(ViewInterface $view, HomeServiceInterface $homeService)
    {
        $this->view = $view;
        $this->homeService = $homeService;
    }


    public function index()
    {
        $view_name = $this->homeService->getViewName();
        $this->view->render($view_name);
    }
}
