<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EpargneController extends Controller
{
    public function Home()
    {
        $viewData = [];
        $viewData["title"] = "Tontine";
        $viewData["subtitle"] = "Home";
        return view('epargne.home')->with("viewData", $viewData);
    }
}
