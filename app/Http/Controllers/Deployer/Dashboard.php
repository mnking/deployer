<?php

namespace App\Http\Controllers\Deployer;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('Deployer.layout');
    }
}
