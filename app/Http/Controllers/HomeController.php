<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $posts = DB::select('SELECT title,votes,image,body,lieu,name FROM posts INNER JOIN users WHERE posts.author_id = users.id ORDER BY posts.created_at DESC LIMIT 10', [1]);
        return view('home', ['posts' => $posts]);
    }
}