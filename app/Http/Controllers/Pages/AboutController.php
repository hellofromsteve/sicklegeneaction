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

    $topics = [
        [
            'id' => 1,
            'title' => 'The Sickle Cell Foundation of Ghana – A Source of National and Global Leadership',
            'route' => 'groundwork.one',
        ],
        [
            'id' => 2,
            'title' => 'Newborn Screening (NBS) and Sickle Cell Clinics – Crucial for Saving Lives',
            'route' =>  'groundwork.two',
        ],
        [
            'id' => 3,
            'title' => 'Hydroxyurea (HU) – A Disease-Altering Drug Available Through a Public-Private Partnership',
            'route' => 'groundwork.three',
        ],
        [
            'id' => 4,
            'title' => 'Global Partnerships and Collaborations – A Benefit to Sickle Cell Warriors and Families',
            'route' => 'groundwork.four',
        ],
        [
            'id' => 5,
            'title' => 'Centers of Excellence (COEs) for Management of Sickle Cell Disease in Regional Hospitals',
            'route' => 'groundwork.five',
        ],
        [
            'id' => 6,
            'title' => 'The Kumasi Center for Sickle Cell Disease and Blood – For Treatment, Training, and Research',
            'route' => 'groundwork.six',
        ],
        [
            'id' => 7,
            'title' => 'A Model for Compassion, Commitment, Collaboration, Cooperation, and Collegiality – Essential for Partnerships',
            'route' => 'groundwork.seven',
        ],
        [
            'id' => 8,
            'title' => 'The SPARCo Treatment Guidelines – The Way Forward Until a Cure is Widely Accessible and Affordable',
            'route' => 'groundwork.eight',
        ],
    ];
        return view('pages.about.groundwork', compact('topics'));
    }

    public function mission()
    {
        return view('pages.about.mission');
    }

    public function goals()
    {
        $goals = [
            [
                'id' => 1,
                'title' => 'Newborn Screening',
                'route' => 'goals.one',
            ],
            [
                'id' => 2,
                'title' => 'Catch-Up Screening',
                'route' => 'goals.two',
            ],
            [
                'id' => 3,
                'title' => 'Outreach Services',
                'route' => 'goals.three',
            ],
            [
                'id' => 4,
                'title' => "Medicine, Technologies, & Innovations",
                'route' => 'goals.four',
            ],
            [
                'id' => 5,
                'title' => 'A Skilled & Well-Trained Workforce',
                'route' => 'goals.five',
            ],
            [
                'id' => 6,
                'title' => 'Facilities, Equipment, Supplies & Infrastructure',
                'route' => 'goals.six',
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
