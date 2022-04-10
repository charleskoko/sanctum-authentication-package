<?php
return [

    /*
   |--------------------------------------------------------------------------
   | Registration rules
   |--------------------------------------------------------------------------
   |
   | This array contains the attributes of the user model
   | and the validation rules for each attribute. Once defined here,
   | these elements will be applied when requesting the registration of a user.
   |
   */

    'user_registration_validation_array' => [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed'
    ],

    /*
  |--------------------------------------------------------------------------
  | Login rules
  |--------------------------------------------------------------------------
  |
  | This array contains the attributes of the user allowing him to log.
  |
  */

    'user_login_validation_array' => [
        'email' => 'required|string|email|',
        'password' => 'required|string|min:8'
    ],

    /*
  |--------------------------------------------------------------------------
  | Login attribute
  |--------------------------------------------------------------------------
  |
  | The elements defined here represent the user model attribute
  | needed to log in.
  |
  */

    'login_attribute' => 'email',

    /*
  |--------------------------------------------------------------------------
  | Api uri
  |--------------------------------------------------------------------------
  |
  | aPi's list of uri's
  |
  */

    'registration_uri' => 'api/v1/register',
    'login_uri' => 'api/v1/login',
    'logout_uri' => 'api/v1/logout',

];
