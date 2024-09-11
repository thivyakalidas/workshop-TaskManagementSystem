<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{


    public function home()
    {
        return view('layout/header')
        . view('home')
        . view('layout/footer');
    }
    public function index()
    {
       return view('layout/header')
       . view('login')
       . view('layout/footer');
    }
    public function profile()

    {
        $data = array();
        $data ['nama'] = "Thivya kalidas";
        $data ['username'] = "Thivya";
        $data ['email'] = "thivyakalidas@gmail.com";
        $data ['password'] = "123456";

        return view('layout/header')
        . view('profile',$data)
        . view('layout/footer');
    }

    public function register()
    {
        return view('layout/header')
        . view('register')
        . view('layout/footer');
    }
}
