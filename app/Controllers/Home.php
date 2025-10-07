<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function login(): string
    {
        return view('index'); // Halaman login
    }

    public function register(): string
    {
        return view('register'); // Halaman register
    }
}