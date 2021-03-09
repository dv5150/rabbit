<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * @return string
     */
    public function index(): string
    {
        return view('template');
    }
}
