<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class GroundworkController extends Controller
{
    //
    public function one()
    {
        return view('pages.groundwork.one');
    }

    public function two()
    {
        return view('pages.groundwork.two');
    }

    public function three()
    {
        return view('pages.groundwork.three');
    }
}
