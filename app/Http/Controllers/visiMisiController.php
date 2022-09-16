<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class visiMisiController extends Controller
{
    function index()
    {
        return view('visi-misi.index');
    }
}
