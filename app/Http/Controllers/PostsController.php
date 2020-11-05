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

        return view('post', ['categories' => $categories]);
    }

    public function createAPost(Request $r)
    {
        $titre = $r->titre;
        $category = $r->category;
        $localisation = $r->localisation;
        $description = $r->description;

        $r->validate([
            'image' => 'required|mimes:png,jpeg,jpg|'
        ]);

        $imageName = time() . '.' . $r->image->extension();

        $r->image->move(public_path('/upload_file'), $imageName);

        $posts = new App\Posts;

        $posts->title = $titre;
        $posts->category_id = $category;
        $posts->lieu = $localisation;
        $posts->body = $description;
        $posts->image = $imageName;

        $posts->author_id = session()->get('user_id');

        $insert = $posts->save();

        if ($insert) {
            return redirect('/createPost')->with('success', 'Votre post a bien été crée ! :D');
        } else {
            return redirect('/createPost')->with('danger', "Erreur lors de l'ajout de votre post :( ");
        }
    }


    public function homeToComments(Request $r)
    {
        session()->put('post_id', $r->post_id);

        return redirect("/comments");
    }

    public function comments()
    {
        $post_id = session()->get('post_id');
        #$post_id = $r->post_id;

        $request_post = "SELECT posts.title,posts.votes,posts.body,posts.image,users.name,posts.id ";
        $request_post .= "FROM posts ";
        $request_post .= "INNER JOIN users ON posts.author_id = users.id ";
        $request_post .= "WHERE posts.id=";
        $request_post .= $post_id;
        $request_post .= ";";

        $post = DB::select($request_post, [1]);
        if ($post) {
            session()->put('post_id', $post[0]->{'id'});

            $request_comments = "SELECT comments.content,users.name,comments.created_at ";
            $request_comments .= "FROM posts_comments ";
            $request_comments .= "INNER JOIN posts ON posts_comments.posts_id=posts.id ";
            $request_comments .= "INNER JOIN comments ON posts_comments.comments_id=comments.id ";
            $request_comments .= "INNER JOIN users ON comments.author_id=users.id ";
            $request_comments .= "WHERE posts.id=";
            $request_comments .= $post_id;
            $request_comments .= " ORDER BY comments.created_at DESC;";

            $comments = DB::select($request_comments, [1]);

            return view("postDetails", ['post' => $post, 'comments' => $comments]);
        }
    }

    public function addComment(Request $r)
    {
        $id = session()->get('user_id');
        $post_id = session()->get('post_id');
        #$post_id = $r->post_id;

        $content = $r->comment;

        $comment = new App\Comment;
        $comment->content = $content;
        $comment->author_id = $id;

        $inserted_comment = $comment->save();
        if ($inserted_comment) {
            $request_id_comment = 'SELECT id FROM comments WHERE content="';
            $request_id_comment .= $content;
            $request_id_comment .= '" AND author_id=';
            $request_id_comment .= $id;
            $request_id_comment .= ";";

            $id_comments = DB::select($request_id_comment, [1]);

            $posts_comments = new App\Posts_comments;
            $posts_comments->posts_id = $post_id;
            $posts_comments->comments_id = intval($id_comments[0]->{'id'});

            $inserted_post_comment = $posts_comments->save();
            if ($inserted_post_comment) {
                return redirect('/comments')->with('msg', "Commentaire ajouté !");
            }
        }
    }
}
