<?php

namespace App\Controllers;


use App\Requests\RegisterRequest;

class UsersController
{
    public function register(RegisterRequest $request)
    {
        var_dump($request->all()['first_name']);
        var_dump($request->input('email'));
    }

    public function update(int $id)
    {
        var_dump($id);
    }
}
