<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RewardsController extends Controller
{
    public function index()
    {
        return view('rewards');
    }
}