<?php


namespace App\Requests;


use Core\Http\Request\Request;

class RegisterRequest extends Request
{
    public function __construct()
    {
        $this->params = $this->validate($_POST);
    }

    protected function validate(array $data): array
    {
        $is_valid = true;
        $error_message = '';

        if (!isset($data['first_name'])) {
            $is_valid = false;
            $error_message .= 'First name field is required' . PHP_EOL;
        }

        if (!isset($data['last_name'])) {
            $is_valid = false;
            $error_message .= 'Last name field is required' . PHP_EOL;
        }

        if (!isset($data['username'])) {
            $is_valid = false;
            $error_message .= 'Last name field is required' . PHP_EOL;
        }

        if (strlen($data['username']) < 3) {
            $is_valid = false;
            $error_message .= 'Username must be at least 3 characters long' . PHP_EOL;
        }

        if (!isset($data['email'])) {
            $is_valid = false;
            $error_message .= 'Email field is required' . PHP_EOL;
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $is_valid = false;
            $error_message .= 'Invalid email format' . PHP_EOL;
        }

        if (!isset($data['confirm_email'])) {
            $is_valid = false;
            $error_message .= 'Confirm email field is required' . PHP_EOL;
        }

        if (strcmp($data['email'], $data['confirm_email']) !== 0) {
            $is_valid = false;
            $error_message .= 'Email and confirm email are different' . PHP_EOL;
        }

        if (!isset($data['password'])) {
            $is_valid = false;
            $error_message .= 'Confirm email field is required' . PHP_EOL;
        }

        if (strlen($data['password']) < 5) {
            $is_valid = false;
            $error_message .= 'Password must be at least 3 characters long' . PHP_EOL;
        }

        if (! $is_valid) {
            throw new \Exception($error_message);
        }

        return $data;
    }
}
