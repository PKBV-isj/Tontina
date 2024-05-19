<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function Home()
    {
        $viewData = [];
        $viewData["title"] = "Notification";
        $viewData["subtitle"] = "Home";
        return view('notification.home')->with("viewData", $viewData);
    }
}
