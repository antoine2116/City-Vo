<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        return view('user');
    }
}