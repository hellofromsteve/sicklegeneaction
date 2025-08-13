<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

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

    public function whoIsAffected()
    {
        return view('pages.about-scd.who-is-affected');
    }

    public function inTheirVoices()
    {
        return view('pages.about-scd.in-their-voices');
    }

    public function treatedAndManage(): View
    {
        return view('pages.about-scd.treated-and-manage');
    }


    public function canBeCured()
    {
        return view('pages.about-scd.can-be-cured');
    }

    public function goodNews()
    {
        return view('pages.about-scd.good-news');
    }
}
