<?php


namespace App\Controllers;


use Core\Http\Controller\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        $this->view->render('register/index');
    }
}
