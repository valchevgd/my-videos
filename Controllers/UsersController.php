<?php

namespace Controllers;


use DTO\UserViewModel;
use Services\RequestServiceInterface;
use ViewEngine\ViewInterface;

class UsersController
{
    public function register(RequestServiceInterface $request)
    {
        var_dump($request->all()['first_name']);
    }

    public function update(int $id)
    {
        var_dump($id);
    }
}
