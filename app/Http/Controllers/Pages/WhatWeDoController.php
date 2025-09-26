<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class WhatWeDoController extends Controller
{
    public function awns()
    {
        return view('pages.what-we-do.awns');
    }


    public function ina()
    {
        return view('pages.what-we-do.needs-adv');
    }

    public function raiseAwareness()
    {
        return view('pages.what-we-do.awareness');
    }

    public function amplify()
    {
        return view('pages.what-we-do.amplify');
    }

    public function screening()
    {
        return view('pages.what-we-do.screening');

    }
}
