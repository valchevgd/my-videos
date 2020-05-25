<?php


namespace App\Requests;


use Core\Http\Request\Request;
use Core\ViewEngine\ViewInterface;

class RegisterRequest extends Request
{
    public function __construct(ViewInterface $view)
    {
        parent::__construct($view);
        $this->params = $this->validate($_POST);
    }

    protected function validate(array $data): array
    {
        $is_valid = true;
        $error_message = [];

        if (!isset($data['first_name'])) {
            $is_valid = false;
            $error_message['first_name_required'] = 'First name field is required';
        } else {
            if (strlen($data['first_name']) > 25) {
                $error_message['first_name_length'] = 'First name  must be shorter than 25 characters';
            }
        }

        if (!isset($data['last_name'])) {
            $is_valid = false;
            $error_message['last_name_required'] = 'Last name field is required';
        } else {
            if (strlen($data['last_name']) > 25) {
                $error_message['last_name_length'] = 'Last name  must be shorter than 25 characters';
            }
        }

        if (!isset($data['username'])) {
            $is_valid = false;
            $error_message['username_required'] = 'Username field is required';
        } else {
            if (strlen($data['username']) < 3) {
                $is_valid = false;
                $error_message['username_length'] = 'Username must be at least 3 characters long';
            } else if (strlen($data['last_name']) > 25) {
                $error_message['username_length'] = 'Username must be shorter than 25 characters';
            }

            //ToDo - add functionality to check for unique username

        }

        if (!isset($data['email'])) {
            $is_valid = false;
            $error_message['email_required'] = 'Email field is required';
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $is_valid = false;
                $error_message['email_valid'] = 'Invalid email format';
            }

            if (strlen($data['email']) > 50) {
                $error_message['username_length'] = 'Email must be shorter than 50 characters';
            }

            if (!isset($data['confirm_email'])) {
                $is_valid = false;
                $error_message['confirm_email_required'] = 'Confirm email field is required';
            } else if (strcmp($data['email'], $data['confirm_email']) !== 0) {

                $is_valid = false;
                $error_message['emails_miss_match'] = 'Email and confirm email are different';
            }

            //ToDo - add functionality to check for unique email
        }

        if (!isset($data['password'])) {
            $is_valid = false;
            $error_message['password_required'] = 'Password field is required';
        } else {

            if (strlen($data['password']) < 5) {
                $is_valid = false;
                $error_message['password_length'] = 'Password must be at least 5 characters long';
            }

            if (strlen($data['password']) > 25) {
                $is_valid = false;
                $error_message['password_length'] = 'Password must be shorter than 25 characters';
            }

            if (strcmp($data['password'], $data['confirm_password']) !== 0) {
                $is_valid = false;
                $error_message['passwords_match'] = 'Password and confirm password are different';
            }
        }

        if (! $is_valid) {
            $this->returnBackWithErrors('register/index', $error_message);
            exit();
        }

        return $data;
    }
}
