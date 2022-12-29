<?php
namespace FebriAnandaLubis\Belajar\PHP\MVC\Controller;

use FebriAnandaLubis\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index() {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Programmer Zaman Now"
        ];

        View::render('Home/index', $model);
    }

    function hello() {
        echo "HomeController.hello()";
    }

    function world() {
        echo "HomeController.world()";
    }

    function about(): void {
        echo "Author : Febri Ananda Lubis";
    }

    function  login(): void {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "title" => "Login Sukses"
        ];

        // kirimkan response ke view
    }

    function register(): void {
        echo "Silahkan Registrasi Terlebih Dahulu";
    }
}