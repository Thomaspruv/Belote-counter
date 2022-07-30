<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleSearchController extends Controller
{
    public function index()
    {
        return view('multipleSearch');
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
