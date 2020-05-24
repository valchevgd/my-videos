<?php


namespace App\Controllers;


use Core\Http\Controller\Controller;

class ErrorController extends Controller
{

    public function index()
    {
        $this->view->render('error/index');
    }
}
