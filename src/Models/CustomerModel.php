<?php

class  CustomerModel extends Model
{
    public function register($name, $email, $login, $pass)
    {
        $salt = md5(date('Y-m-d H:I:S') . $name . $email . $login . $pass);
        $pass = md5(md5($pass) . $salt);

        $query = "INSERT INTO customer (
                    name,
                    email,
                    login,
                    pass,
                    salt
                ) VALUES (
                    '$name',
                    '$email',
                    '$login',
                    '$pass',
                    '$salt'
                );";

        $this->insert($query);
    }
}