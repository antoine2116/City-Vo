<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class MapController extends Controller
{
    // Get Créer compte
    public function index()
    {
        return view('map');
    }
}