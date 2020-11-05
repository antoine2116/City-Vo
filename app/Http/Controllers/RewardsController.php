<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RewardsController extends Controller
{
    public function index()
    {
        $rewards = DB::select('SELECT * FROM rewards ORDER BY points', [1]);

        $id = session()->get('user_id');
        $request = "SELECT points FROM users WHERE id=";
        $request .=$id;
        $request .= ";";
        $points = DB::select($request, [1]);

        // $request_rank = "SELECT * FROM (SELECT id,@points := @points + 1 AS rank FROM users p, (SELECT @points := 0) r ORDER BY points DESC ) t WHERE id=";
        // $request_rank .= $id;
        // $request_rank .= ";";
        
        // $rank = DB::select($request_rank, [1]);

        return view('rewards',['rewards' => $rewards,'points'=>$points/*,'rank'=>$rank*/]);
    }
}
