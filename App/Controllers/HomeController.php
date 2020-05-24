<?php


namespace App\Controllers;


use App\Services\HomeServiceInterface;
use Core\Http\Controller\Controller;
use Core\Http\Response\ResponseInterface;
use Core\ViewEngine\ViewInterface;

class HomeController extends Controller
{
    public function index(HomeServiceInterface $service)
    {
        $view_name = $service->getViewName();
        $this->view->render($view_name);
    }
}
