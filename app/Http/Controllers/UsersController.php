<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function index()
    {
        $id = session()->get('user_id');

        $request = 'SELECT title,body,image,created_at FROM posts WHERE author_id=';
        $request .= $id;
        $request .= ';';
        $myposts = DB::select($request, [1]);


        $profil_request = 'SELECT avatar,name,email FROM users WHERE id=';
        $profil_request .= $id;
        $profil_request .= ';';
        $profil = DB::select($profil_request, [1]);

        return view('user',['myposts' => $myposts,'profil' => $profil]);
    }

    public function updateProfil(Request $r)
    {
        $id = session()->get('user_id');

        $name=$r->name;
        $email=$r->email;
    

        $check_name=App\Login::where('name',$name)->get();
        if(count($check_name)>0)
        {
            return redirect('/user')->with('msg','Pseudo existe déjà !');
        }
        $check_email=App\Login::where('email',$email)->get();
        if(count($check_email)>0)
        {
            return redirect('/user')->with('msg','Email existe déjà !');    
        }

        $affected = DB::table('users')
              ->where('id', $id)
              ->update(['name' => $name,'email' => $email]);

        if($affected){
            return redirect('/user')->with('success','Votre profil a bien été mise à jour ! :)');
        }
        else{
            return redirect('/user')->with('danger',"Erreur lors de la mise à jour de votre profil :(");
        }
    }
}
