<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolidariteController extends Controller
{
    public function Home()
    {
        $viewData = [];
        $viewData["title"] = "Tontine";
        $viewData["subtitle"] = "Home";
        return view('solidarite.home')->with("viewData", $viewData);
    }
}
