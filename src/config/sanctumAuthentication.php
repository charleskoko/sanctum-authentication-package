<?php
return [
    'user_registration_validation_array' => [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed'
    ],
    'user_login_validation_array' => [
        'email' => 'required|string|email|',
        'password' => 'required|string|min:8'
    ],
    'login_attribute' => 'email',

];
