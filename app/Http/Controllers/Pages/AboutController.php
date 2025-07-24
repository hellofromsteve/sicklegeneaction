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
        return view('pages.about.index');
    }

    public function staff()
    {
        return view('pages.about.index');
    }

    public function board()
    {
        return view('pages.about.index');
    }

    public function advisory()
    {
        return view('pages.about.index');
    }

    public function memberships()
    {
        return view('pages.about.index');
    }

    public function values()
    {
        return view('pages.about.index');
    }


}
