<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{


    public function index($id)
    {
        return view('game',['id' => $id]);
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
}
