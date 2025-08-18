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

    public function scdChallenges()
    {
        $complications = [
            'Acute chest syndrome',
            'Aplastic crisis',
            'Blood clots',
            'Chronic (long-term) pain',
            'Delayed growth',
            'Delayed puberty',
            'Enlarged spleen',
            'Eye problems',
            'Gallstones',
            'Heart problems',
            'Infections',
            'Joint problems',
            'Kidney problems',
            'Leg ulcers',
            'Liver problems',
            'Pain crises',
            'Pregnancy problems',
            'Priapism',
            'Silent brain injury',
            'Splenic sequestration crisis',
            'Stroke',
            'Vitamin deficiency',
        ];
        return view('pages.about-scd.scd-challenges', compact('complications'));
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
