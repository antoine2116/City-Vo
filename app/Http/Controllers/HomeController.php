<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index($id=null)
    {
        $categories = DB::select('SELECT * FROM categories', [1]);
        if ($id == null) {
            $posts = DB::select('SELECT title,votes,image,body,lieu,name, category_id FROM posts INNER JOIN users WHERE posts.author_id = users.id ORDER BY posts.created_at DESC LIMIT 10', [1]);
        }
        else {
            $request = 'SELECT title,votes,image,body,lieu,name, category_id FROM posts INNER JOIN users WHERE posts.category_id = ';
            $request .= $id;
            $request .= ' AND posts.author_id = users.id ORDER BY posts.created_at DESC LIMIT 10';
            $posts = DB::select($request, [1]);
        }
        return view('home', ['posts' => $posts], ['categories' => $categories]);
    }

}