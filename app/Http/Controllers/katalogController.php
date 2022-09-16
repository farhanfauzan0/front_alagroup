<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class katalogController extends Controller
{
    function index()
    {
        return view('katalog.index');
    }
}
