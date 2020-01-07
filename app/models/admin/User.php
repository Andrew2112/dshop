<?php

namespace app\models\admin;

class User extends \app\models\User
{
    public $attributes = [
        'id' => '',
        'login' => '',
        'password' => '',
        'name' => '',
        'email' => '',
        'address' => '',
        'role' => '',
    ];
    public $rules = [
        'required' => [
            ['login'],
            ['name'],
            ['email'],
            ['role'],
        ],
        'email' => [
            ['email'],
        ],
    ];

    public function checkUnique()
    {
        $user = \R::findOne('user', '(login=? OR email=?) AND id <> ?', [$this->attributes['login'], $this->attributes['email'], $this->attributes['id']]);
        if ($user) {
            if ($user->login == $this->attributes['login']) {
                $this->errors['unique'][] = 'Пользователь с таким login уже зарегистрирован';
            }
            if ($user->email == $this->attributes['email']) {
                $this->errors['unique'][] = 'Пользователь с таким email уже зарегистрирован';
            }
            return false;
        }
        return true;
    }

}