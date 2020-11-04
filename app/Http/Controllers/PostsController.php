<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App;


class PostsController extends Controller
{
    # Get create post
    public function index() 
    {
        $categories = DB::select('SELECT * FROM categories', [1]);

        return view('post',['categories' => $categories]);
    }

    public function createAPost(Request $r)
    {
        $titre=$r->titre;
        $category=$r->category;
        $localisation=$r->localisation;
        $description=$r->description;

        $r->validate([
            'image'=>'required|mimes:png,jpeg,jpg|max:10240'
            ]);

        $imageName = time().'.'.$r->image->extension();
        
        $r->image->move(public_path('/upload_file'),$imageName);

        $posts = new App\Posts;

        $posts->title=$titre;
        $posts->category_id=$category;
        $posts->lieu=$localisation;
        $posts->body=$description;
        $posts->image=$imageName;

        $posts->author_id=session()->get('user_id');

        $insert = $posts->save();

        if($insert){
            return redirect('/createPost')->with('success','Votre post a bien été crée ! :D');
        }
        else{
            return redirect('/createPost')->with('danger',"Erreur lors de l'ajout de votre post :( ");
        }
    }
}
