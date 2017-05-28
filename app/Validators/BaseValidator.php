<?php

namespace App\Validators;

use Illuminate\Validation\Validator;

interface BaseValidator
{
    /**
     * @param string $attribute
     * @param string $value
     * @param array $parameters
     * @param Validator $validator
     * @return bool
     */
    public function validate($attribute, $value, $parameters, Validator $validator);
}