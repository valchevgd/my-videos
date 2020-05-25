<?php


namespace App\Requests;


use App\DTO\Errors\RegisterFormErrorsDTO;
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
        $error_message = new RegisterFormErrorsDTO();
        $valid_data = [];

        if (!isset($data['first_name'])) {

            $is_valid = false;
            $error_message->setFirstNameRequired('First name field is required');
        } else {
            if (strlen($data['first_name']) > 30) {

                $is_valid = false;
                $error_message->setFirstNameLength('First name  must be shorter than 30 characters');
            }
        }
        $valid_data['first_name'] = trim(strip_tags($data['first_name']));

        if (!isset($data['last_name'])) {

            $is_valid = false;
            $error_message->setLastNameRequired('Last name field is required');
        } else {
            if (strlen($data['last_name']) > 30) {

                $is_valid = false;
                $error_message->setLastNameLength('Last name  must be shorter than 30 characters');
            }
        }
        $valid_data['last_name'] = trim(strip_tags($data['last_name']));

        if (!isset($data['username'])) {

            $is_valid = false;
            $error_message->setUsernameRequired('Username field is required');
        } else {
            if (strlen($data['username']) < 3) {

                $is_valid = false;
                $error_message->setUsernameLength('Username must be at least 3 characters long');
            } else if (strlen($data['last_name']) > 50) {

                $is_valid = false;
                $error_message->setUsernameLength('Username must be shorter than 50 characters');
            }

            //ToDo - add functionality to check for unique username
        }
        $valid_data['username'] = trim(strip_tags($data['username']));

        if (!isset($data['email'])) {

            $is_valid = false;
            $error_message->setEmailRequired('Email field is required');
        } else {
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {

                $is_valid = false;
                $error_message->setEmailValid('Invalid email format');
            }

            if (strlen($data['email']) > 100) {

                $is_valid = false;
                $error_message->setEmailLength('Email must be shorter than 100 characters');
            }

            if (!isset($data['confirm_email'])) {

                $is_valid = false;
                $error_message->setConfirmEmailRequired('Confirm email field is required');
            } else if (strcmp($data['email'], $data['confirm_email']) !== 0) {

                $is_valid = false;
                $error_message->setEmailsMissMatch('Email and confirm email are different');
            }

            //ToDo - add functionality to check for unique email
        }
        $valid_data['email'] = trim(strip_tags($data['email']));

        if (!isset($data['password'])) {

            $is_valid = false;
            $error_message->setPasswordRequired('Password field is required');
        } else {

            if (strlen($data['password']) < 5) {
                $is_valid = false;
                $error_message->setPasswordLength('Password must be at least 5 characters long');
            }

            if (strlen($data['password']) > 30) {

                $is_valid = false;
                $error_message->setPasswordLength('Password must be shorter than 30 characters');
            }

            if (!isset($data['confirm_password'])) {

                $is_valid = false;
                $error_message->setConfirmPasswordRequired('Confirm password field is required');
            } else if (strcmp($data['password'], $data['confirm_password']) !== 0) {

                $is_valid = false;
                $error_message->setPasswordsMissMatch('Password and confirm password are different');
            }
        }
        $valid_data['password'] = trim(strip_tags($data['password']));

        if (! $is_valid) {
            $this->returnBackWithErrors('register/index', $error_message);
            exit();
        }

        return $valid_data;
    }
}
