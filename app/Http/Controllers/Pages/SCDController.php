<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SCDController extends Controller
{
    public function whatIsScd()
    {
        return view('about-scd.what-is-scd');
    }
}
