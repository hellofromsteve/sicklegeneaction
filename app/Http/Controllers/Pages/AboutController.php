<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $features = [
            [
                'title' => 'Our Inspiration',
                'route' => 'about.inspiration',
            ],
            [
                'title' => 'Our Groundwork',
                'route' => 'about.groundwork',
            ],
            [
                'title' => 'Our Mission and Vision',
                'route' => 'about.mission',
            ],
            [
                'title' => 'Our Goals',
                'route' => 'about.goals',
            ],
            [
                'title' => 'Our Staff',
                'route' => 'about.staff',
            ],
            [
                'title' => 'Our Board',
                'route' => 'about.board',
            ],
            [
                'title' => 'Our Advisory Board',
                'route' => 'about.advisory',
            ],
            [
                'title' => 'Our Memberships',
                'route' => 'about.memberships',
            ],
            [
                'title' => 'Our Values',
                'route' => 'about.values',
            ],
        ];

        return view('pages.about.index', compact('features'));
    }

    public function inspiration()
    {
        return view('pages.about.inspiration');
    }
    public function groundwork()
    {
        return view('pages.about.groundwork');
    }

    public function mission()
    {
        return view('pages.about.mission');
    }

    public function goals()
    {
        $goals = [
            [
                'title' => 'Newborn Screening',
                'route' => 'about.inspiration',
            ],
            [
                'title' => 'Catch-Up Screening',
                'route' => 'about.groundwork',
            ],
            [
                'title' => 'Outreach Services',
                'route' => 'about.board',
            ],
            [
                'title' => 'Medicine, Technologies & Innovations',
                'route' => 'about.mission',
            ],
            [
                'title' => 'A Skilled & Well-Trained Workforce',
                'route' => 'about.goals',
            ],
            [
                'title' => 'Facilities, Equipment, Supplies & Infrastructure',
                'route' => 'about.staff',
            ],

        ];
        return view('pages.about.goals', compact('goals'));
    }

    public function staff()
    {

        $staff = require database_path('datas/staff-info.php');

        return view('pages.about.staff', compact('staff'));
    }

    public function board()
    {
        $board = require database_path('datas/board-info.php');

        return view('pages.about.board', compact('board'));
    }

    public function advisory()
    {
        $advisory = require database_path('datas/advisory-info.php');
        return view('pages.about.advisory', compact('advisory'));
    }

    public function memberships()
    {
        return view('pages.about.memberships');
    }

    public function values()
    {
        return view('pages.about.values');
    }


}
