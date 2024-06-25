<?php

class AuthModel extends DB
{
    public function login(string $email, string $password): bool|object
    {
        $login = self::connection()->prepare('
            SELECT * FROM usuario 
            WHERE 
                email = :email
                AND senha = :password
        ');

        $login->bindValue(':email', $email);
        $login->bindValue(':password', $password);

        $login->execute();

        return ($login->rowCount() == 1) ? $login->fetch() : false;
    }
}