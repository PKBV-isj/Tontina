<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TontineController extends Controller
{
    public function Home()
    {
        $viewData = [];
        $viewData["title"] = "Tontine";
        $viewData["subtitle"] = "Home";
        return view('tontine.home')->with("viewData", $viewData);
    }
}
