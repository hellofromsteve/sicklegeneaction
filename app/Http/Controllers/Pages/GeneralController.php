<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class GeneralController extends Controller
{
    //
    public function home()
    {
        return view('pages.general.home');
    }

    public function aboutUs()
    {

        $features = [
            [
                'title' => 'Our Inspiration',
                'route' => 'about-us.inspiration',
            ],
            [
                'title' => 'Our Groundwork',
                'route' => 'about-us.groundwork',
            ],
            [
                'title' => 'Our Mission and Vision',
                'route' => 'about-us.mission',
            ],
            [
                'title' => 'Our Goals',
                'route' => 'about-us.goals',
            ],
            [
                'title' => 'Our Staff',
                'route' => 'about-us.staff',
            ],
            [
                'title' => 'Our Board',
                'route' => 'about-us.board',
            ],
            [
                'title' => 'Our Advisory Board',
                'route' => 'about-us.advisory',
            ],
            [
                'title' => 'Our Memberships',
                'route' => 'about-us.memberships',
            ],
            [
                'title' => 'Our Values',
                'route' => 'about-us.values',
            ],
        ];

        return view('pages.general.about-us', compact('features'));
    }

    public function aboutScd()
    {

        $features = [
        [
            'title' => 'What SCD Is',
            'route' => 'about-scd.what-is-scd',
        ],
        [
            'title' => 'What Causes SCD and Its Challenges',
            'route' => 'about-scd.causes-scd',
        ],
        [
            'title' => 'Who Is Affected by SCD',
            'route' => 'about-scd.affected-scd',
        ],
        [
            'title' => 'In Their Own Voices',
            'route' => 'about-scd.voices',
        ],
        [
            'title' => 'How SCD Can Be Treated and Managed',
            'route' => 'about-scd.treated-and-managed',
        ],
        [
            'title' => 'How SCD Can Be Cured',
            'route' => 'about-scd.cured',
        ],
        [
            'title' => 'The Good News',
            'route' => 'about-scd.good-news',
        ],

    ];

        return view('pages.general.about-scd', [
            'features' => $features,
        ]);
    }

    public function contactUs()
    {


        return view('pages.general.contact-us');
    }

    public function handleContact(Request $request)
    {
        try {
            $info = $request->validate([
                'name' => 'required|string|max:200',
                'email' => 'required|email',
                'message' => 'required|string|max:200',
            ]);
        } catch (ValidationException $e) {
            $firstError = $e->validator->errors()->first();
            sweetalert()->error($firstError);
            return back()->withErrors($e->validator)->withInput();
        }

        return back()->with('success', 'Thanks for contacting us!');

    }


    public function whatWeDo()
    {
       return view('pages.general.what-we-do');
    }
}
