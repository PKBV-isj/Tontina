<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function voirHome()
    {
        $viewData = [];
        $viewData["title"] = "Home";
        $viewData["subtitle"] = "Welcome";
        return view('welcome')->with("viewData", $viewData);
    }
}
