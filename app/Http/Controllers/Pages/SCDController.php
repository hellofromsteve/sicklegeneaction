<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SCDController extends Controller
{
    public function whatIsScd()
    {
        return view('pages.about-scd.what-is-scd');
    }

    public function whatCauses()
    {
        return view('pages.about-scd.what-causes');
    }
}
