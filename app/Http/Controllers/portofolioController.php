<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Portofolio;
use App\Models\M_Profil;

class portofolioController extends Controller
{
    function index()
    {
        $profile = M_Profil::select('*')->where('type', '=', 'ala')->get();
        $portofolio = M_Portofolio::select('*')->where('type', '=', 'ala')->get();

        return view('portofolio.index', ['profile' => $profile[0], 'portofolio' => $portofolio]);
        return view('footer.index', ['profile' => $profile[0]]);
    }
}
