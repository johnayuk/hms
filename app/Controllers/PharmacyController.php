<?php

namespace App\Controllers;

use Illuminate\Http\Request;

class PharmacyController
{
    public function index()
    {
        return view('pharmacy');
    }
}
