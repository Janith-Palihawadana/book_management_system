<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class ValidationService
{

    public static function registrationValidator($request)
    {
        return Validator::make($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:authors',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}
