<?php

namespace App\Controllers;

class HomeController extends Controller
{
    function index()
    {
        echo view('index.html');
    }
}