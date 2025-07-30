<?php

namespace App\Http\Controllers\Pages\AboutUs;

use App\Http\Controllers\Controller;

class GroundworkController extends Controller
{
    //
    public function one()
    {
        return view('pages.about-us.groundwork.one');
    }

    public function two()
    {
        return view('pages.about-us.groundwork.two');
    }

    public function three()
    {
        return view('pages.about-us.groundwork.three');
    }

    public function four()
    {
        return view('pages.about-us.groundwork.four');
    }

    public function five()
    {
        $hospitals = [
            'Komfo Anokye Teaching Hospital',
            'Korle-Bu Teaching Hospital - Adult Clinic',
            'Korle-Bu Teaching Hospital - Pediatric Clinic',
            'Tema General Hospital - Pediatric Clinic',
            'Tema General Hospital - Adult Clinic',
            'Greater Accra Regional Hospital',
            '37 Military Hospital',
            'University of Ghana Hospital',
            'Ho Regional Hospital',
            'Effia Nkwanta Hospital',
            'Agogo Presbyterian Hospital',
            'Princess Marie Louise Hospital – Pediatric',
            'Asokwa Children’s Hospital – Pediatric Clinic',
            'Dormaa Ahenkro Presbyterian Hospital',
            'Eastern Regional Hospital',
            'Kumasi South Hospital',
            'Hohoe Municipal Hospital',
            'LEKMA Hospital',
            'Methodist Hospital, Ankaase',
            'St. Patrick’s Hospital, Offinso',
            'University Hospital, Kwame Nkrumah University of Science and Technology',
        ];
        return view('pages.about-us.groundwork.five', compact('hospitals'));
    }

    public function six()
    {
        return view('pages.about-us.groundwork.six');
    }

    public function seven()
    {
        return view('pages.about-us.groundwork.seven');
    }

    public function eight()
    {
        return view('pages.about-us.groundwork.eight');
    }
}
