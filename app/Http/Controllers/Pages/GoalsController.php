<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoalsController extends Controller
{
    //
    public function one()
    {
        return view('pages.goals.one');
    }

    public function two()
    {
        return view('pages.goals.two');
    }

    public function three()
    {
        return view('pages.goals.three');
    }

    public function four()
    {
        return view('pages.goals.four');
    }


    public function five()
    {
        return view('pages.goals.five');
    }


    public function six()
    {
        return view('pages.goals.six');
    }
}
