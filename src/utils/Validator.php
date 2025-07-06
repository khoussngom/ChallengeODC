<?php


namespace App\Utils;

class Validator
{
    private array $errors = [];

    public function validateRequired(string $field, $value, string $message = 'Ce champ est requis.')
    {
        if (empty(trim($value))) {
            $this->errors[$field][] = $message;
        }
    }

    public function validateEmail(string $field, $value, string $message = 'Email invalide.')
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = $message;
        }
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function isValid(): bool
    {
        return empty($this->errors);
    }
}