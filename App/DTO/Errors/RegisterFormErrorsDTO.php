<?php


namespace App\DTO\Errors;


class RegisterFormErrorsDTO
{
    private string $first_name_required = '';
    private string $first_name_length = '';
    private string $last_name_required = '';
    private string $last_name_length = '';
    private string $username_required = '';
    private string $username_length = '';
    private string $email_required = '';
    private string $email_valid = '';
    private string $email_length = '';
    private string $emails_miss_match = '';
    private string $confirm_email_required = '';
    private string $password_required = '';
    private string $password_length = '';
    private string $passwords_miss_match = '';
    private string $confirm_password_required = '';

    public function getFirstNameRequired(): string
    {
        return $this->first_name_required;
    }

    public function setFirstNameRequired(string $first_name_required): void
    {
        $this->first_name_required = $first_name_required;
    }

    public function getFirstNameLength(): string
    {
        return $this->first_name_length;
    }

    public function setFirstNameLength(string $first_name_length): void
    {
        $this->first_name_length = $first_name_length;
    }

    public function getLastNameRequired(): string
    {
        return $this->last_name_required;
    }

    public function setLastNameRequired(string $last_name_required): void
    {
        $this->last_name_required = $last_name_required;
    }

    public function getLastNameLength(): string
    {
        return $this->last_name_length;
    }

    public function setLastNameLength(string $last_name_length): void
    {
        $this->last_name_length = $last_name_length;
    }

    public function getUsernameRequired(): string
    {
        return $this->username_required;
    }

    public function setUsernameRequired(string $username_required): void
    {
        $this->username_required = $username_required;
    }

    public function getUsernameLength(): string
    {
        return $this->username_length;
    }

    public function setUsernameLength(string $username_length): void
    {
        $this->username_length = $username_length;
    }

    public function getEmailRequired(): string
    {
        return $this->email_required;
    }

    public function setEmailRequired(string $email_required): void
    {
        $this->email_required = $email_required;
    }

    public function getEmailValid(): string
    {
        return $this->email_valid;
    }

    public function setEmailValid(string $email_valid): void
    {
        $this->email_valid = $email_valid;
    }

    public function getEmailLength(): string
    {
        return $this->email_length;
    }

    public function setEmailLength(string $email_length): void
    {
        $this->email_length = $email_length;
    }

    public function getEmailsMissMatch(): string
    {
        return $this->emails_miss_match;
    }

    public function setEmailsMissMatch(string $emails_miss_match): void
    {
        $this->emails_miss_match = $emails_miss_match;
    }

    public function getConfirmEmailRequired(): string
    {
        return $this->confirm_email_required;
    }

    public function setConfirmEmailRequired(string $confirm_email_required): void
    {
        $this->confirm_email_required = $confirm_email_required;
    }

    public function getPasswordRequired(): string
    {
        return $this->password_required;
    }

    public function setPasswordRequired(string $password_required): void
    {
        $this->password_required = $password_required;
    }

    public function getPasswordLength(): string
    {
        return $this->password_length;
    }

    public function setPasswordLength(string $password_length): void
    {
        $this->password_length = $password_length;
    }

    public function getPasswordsMissMatch(): string
    {
        return $this->passwords_miss_match;
    }

    public function setPasswordsMissMatch(string $passwords_miss_match): void
    {
        $this->passwords_miss_match = $passwords_miss_match;
    }

    public function getConfirmPasswordRequired(): string
    {
        return $this->confirm_password_required;
    }

    public function setConfirmPasswordRequired(string $confirm_password_required): void
    {
        $this->confirm_password_required = $confirm_password_required;
    }
}
