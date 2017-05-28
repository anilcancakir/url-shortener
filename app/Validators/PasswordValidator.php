<?php

namespace App\Validators;


use Illuminate\Validation\Validator;

class PasswordValidator implements BaseValidator {
    /**
     * Validate telephone number
     *
     * @param string $attribute
     * @param string $value
     * @param array $parameters
     * @param Validator $validator
     * @return bool
     */
    public function validate($attribute, $value, $parameters, Validator $validator) {
        return !!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*/', $value);
    }
}