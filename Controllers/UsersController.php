<?php

namespace Controllers;


use Core\Request\RegisterRequest;


class UsersController
{
    public function register(RegisterRequest $request)
    {
        var_dump($request->all()['first_name']);
    }

    public function update(int $id)
    {
        var_dump($id);
    }
}
