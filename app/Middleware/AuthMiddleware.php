<?php

namespace FebriAnandaLubis\Belajar\PHP\MVC\MiddleWare;

class AuthMiddleware implements MiddleWare
{
    public function before(): void
    {
        session_start();
        if(!isset($_SESSION['user'])) {
            header('Location: /register');
            exit();
        }
    }
}