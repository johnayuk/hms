<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('/blog');
    }

    public function contact()
    {
        return view('/contact');
    }
}