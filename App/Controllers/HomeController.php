<?php


namespace App\Controllers;


use App\Services\HomeServiceInterface;
use Core\Http\Controller\Controller;

class HomeController extends Controller
{
    public function index(HomeServiceInterface $service)
    {
        $view_name = $service->getViewName();
        $this->view->render($view_name);
    }
}
