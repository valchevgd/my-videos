<?php


namespace App\Controllers;


use Core\Http\Controller\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->view->render('login/index');
    }

}
