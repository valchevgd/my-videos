<?php

namespace App\Controllers;


use App\Requests\RegisterRequest;
use Core\Http\Controller\Controller;

class UsersController extends Controller
{
    public function register(RegisterRequest $request)
    {
        var_dump($request->all());
        var_dump($request->input('email'));
        $this->response->redirect('/login');
    }

    public function update(int $id)
    {
        var_dump($id);
    }
}
