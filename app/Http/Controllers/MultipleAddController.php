<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleAddController extends Controller
{

    public function index()
    {
        return view('multipleAdd');
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
