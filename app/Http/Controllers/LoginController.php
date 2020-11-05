<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LoginController extends Controller
{
    // Get Créer compte
    public function index()
    {
        return view('create_acc');
    }

    // POST Créer compte
    public function create(Request $r)
    {
        $name=$r->uname;
        $email=$r->uemail;
        $pass=password_hash(htmlentities($r->upass),PASSWORD_DEFAULT);
        $check_email=App\Login::where('email',$email)->get();

        if(count($check_email)>0)
        {
            return redirect('/create_account')->with('msg','Email existe déjà !');
            
        }
        else
        {
            $login= new App\Login;
            $login->name=$name;
            $login->email=$email;
            $login->password=$pass;

            $created=$login->save();

            if($created)
            {
                $password=password_verify($r->$pass,PASSWORD_DEFAULT);
                $session = App\Login::where('email',$email)->where('password',$password)->get();
                if(count($session)>0)
                {
                    $r->session()->put('user_id',$session[0]->id);
                    $r->session()->put('user_name',$session[0]->name);
                    return view('/presentation');
                }
            }
        }
    }

    // Get Login
    public function login($value='')
    {
        return view('login');
    }

    // Post Login
    public function check_user(Request $r)
    {
        $email=$r->uemail;
        $password=password_verify($r->upass,PASSWORD_DEFAULT);

        $session = App\Login::where('email',$email)->where('password',$password)->get();

        if(count($session)>0)
        {
            $r->session()->put('user_id',$session[0]->id);
            $r->session()->put('user_name',$session[0]->name);

            return redirect('/home');
        }
        else
        {
            return redirect('/login')->with('msg','Mail ou mot de passe incorrect');
        }
    }

    // Check si un user est connecté
    public function protect(Request $r)
    {
        if($r->session()->get('user_id')== "")
        {
            return redirect('/welcome');
        }
        else
        {
            return redirect('/home');
        }
    }

    // Déconnection
    public function logout(Request $r)
    {
        $r->session()->forget('user_id');
        $r->session()->forget('user_name');

        return redirect('/');
    }


}
