<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class LoginController extends Controller
{
    public function index()
    {
        return view('create_acc');
    }

    public function create(Request $r)
    {
        $name=$r->uname;
        $email=$r->uemail;
        $pass=password_hash(htmlentities($r->upass),PASSWORD_DEFAULT);
        $check_email=App\Login::where('email',$email)->get();

        if(count($check_email)>0)
        {
            return redirect('/create_account')->with('msg','Email existe déjà !');
            
        }else{
            $login= new App\Login;

            $login->name=$name;
            $login->email=$email;
            $login->password=$pass;

            $created=$login->save();

            if($created)
            {
                return redirect('/login')->with('msg','Compte crée ! Vous pouvez vous connecter !');
            }
        }
    }

    public function login($value='')
    {
        return view('login');
    }

    public function check_user(Request $r)
    {
        $email=$r->uemail;
        $password=password_verify($r->upass,PASSWORD_DEFAULT);

        $session = App\Login::where('email',$email)->where('password',$password)->get();

        if(count($session)>0)
        {
            $r->session()->put('user_id',$session[0]->id);
            $r->session()->put('user_name',$session[0]->name);

            return redirect('/welcome');
        }else{

            return redirect('/login')->with('msg','Mail ou mot de passe incorrect');

        }
    }


    public function protect(Request $r)
    {
        if($r->session()->get('user_id')== "")
        {
            return redirect('/login');
        }else{
            $username=$r->session()->get('user_name');
            $userid=$r->session()->get('user_id');

            $capsule = array(
                'username' => $username,
                'userid'   => $userid
            );

            return view('protect')->with($capsule);
        }
    }

    public function logout(Request $r)
    {
        $r->session()->forget('user_id');
        $r->session()->forget('user_name');

        return redirect('/login');
    }
}
