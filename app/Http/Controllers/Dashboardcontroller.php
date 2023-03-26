<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{
    public function index()
    {
        # code...
        $data = [

            'title' => "Dashboard | Admin"
        ];

        return view('Dashboard.index', $data);
    }
}
