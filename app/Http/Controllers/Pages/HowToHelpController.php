<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;

class HowToHelpController extends Controller
{
    public function howToHelp()
    {
        return view('pages.general.how-to-help');
   }
}
